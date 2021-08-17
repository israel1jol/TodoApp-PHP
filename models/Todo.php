<?php
class Todo{
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getTodos($param){
        $query = "SELECT * FROM todo WHERE user='$param' ORDER BY created_at DESC";
        $res = $this->db->fetch($query);
        return $res;
    }

    public function filterByCompletion($param){
        $query = "SELECT * FROM todo WHERE is_completed = $param";
        $res = $this->db->fetch($query);
        return $res;
    }

    public function addTodo($title, $is_complete, $user){
        $query = "INSERT INTO todo(title, is_completed, user) VALUE ('$title', $is_complete, '$user')";
        $this->db->insert($query);
    }

    public function EditTodoCompletion($id, $comp){
        $query = "UPDATE todo SET is_completed=$comp WHERE id=$id";
        $this->db->insert($query);
    }

    public function deleteTodo($id){
        $query = "DELETE FROM todo WHERE id=$id";
        $this->db->insert($query);
    }
}