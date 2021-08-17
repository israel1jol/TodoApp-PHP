<?php
require_once '../config/init.php';

$signin = new Template('../views/signin.php');

$signin->error = '';

if(isset($_POST['user']) && isset($_POST['pwd'])){
    if(authenticate($_POST['user'], $_POST['pwd'])){
        redirect('todos.php', $_POST['user'], $_POST['pwd']);
    }
    else{
        $signin->error = 'Invalid Username or Password';
    }
}
    

echo $signin;