<?php
class User{
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function encryptPwd($pwd){
        $res = hash("ripemd128", "&%90>JG@4!bynBOYVh0n<iu$pwd^$^%VGyt%#%5");
        return $res;
    }

    public function checkPwd($pwd_db, $pwd_inp){
        $res = hash("ripemd128", "&%90>JG@4!bynBOYVh0n<iu$pwd_inp^$^%VGyt%#%5");
        if($pwd_db === $res){
            return true;
        }
        else{
            return false;
        }
    }

    public function createUser($firstname,$lastname,$username,$email,$pwd){
        $query = "INSERT INTO user(fname, lname, username, user_email, user_pwd) VALUES('$firstname', '$lastname', '$username', '$email', '$pwd')";
        $this->db->insert($query);
        
    }

    public function fetchAll(){
        $query = "SELECT * FROM user";
        $res = $this->db->fetch($query);
        return $res;
    }
}