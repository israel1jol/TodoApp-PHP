<?php
require_once '../config/init.php';

$todosTmp = new Template('../views/todos.php');

if(user_session_is_active()){
    $todo_ins= new Todo();
    $todosTmp->user = $_SESSION['user'];

    if(isset($_POST['pk'])){
        $pk = $_POST['pk'];
        if(isset($_POST['is_comp'])){
            $comp = $_POST['is_comp'] == 'complete' ? 0 : 1;
            $todo_ins->EditTodoCompletion($pk, $comp);
        }
        if(isset($_POST['del'])){
            $todo_ins->deleteTodo($pk);
        }
    }
    if(isset($_POST['add-todo'])){
        if(isset($_POST['todo-name']) && isset($_POST['todo-comp'])){
            $comp = $_POST['todo-comp'] === 'complete' ? 1 : 0;
            $todo_ins->addTodo($_POST['todo-name'], $comp, $todosTmp->user);
        }            
    }
    
    $todos_for_user = $todo_ins->getTodos($_SESSION['user']);
    $todosTmp->todos = $todos_for_user;
    echo $todosTmp;
}
else{
    header('Location: signin.php');
}




