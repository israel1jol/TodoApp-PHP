<?php
class Database{
    private $db;
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pwd = DB_PWD;
    private $db_name = DB_NAME;

    public function __construct(){
        try{
            $this->db = new PDO("mysql:host=$this->host;dbname=$this->db_name;", $this->user, $this->pwd);
            $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }
        
    }

    public function insert($query){
        $res = $this->db->prepare($query);
        $res->execute();
    }

    public function fetch($query){
        $result = $this->db->prepare($query);
        $result->execute();
        return $result->fetchAll();
    }
}