<?php
    session_start();


    //auth user helper function
    function authenticate($username, $password){
        $auth = new User();
        $users = $auth->fetchAll();
        foreach($users as $row){
            if($row['username'] === $username){
                if($auth->checkPwd($row['user_pwd'], $password)){
                    return true;
                }
            }
        }
        return false;
    }
    
    //Checks if a user with the username exists
    function checkuser($username, $email){
        $auth = new User();
        $users = $auth->fetchAll();
        foreach($users as $row){
            if($row['username'] === $username || $row['user_email'] === $email){
                return true;
            }
        }
        return false;
    }

    //form submit http response redirect helper function
    function redirect($location, $user=null, $pwd=null){
        if(isset($_SESSION['user']) && isset($_SESSION['pwd'])){
            header('Location: '.$location);
        }
        else{
            $_SESSION['user'] = $user;
            $_SESSION['pwd'] = $pwd;
            header('Location: '.$location);
        }
    }

    //Check if Client is signed In
    function user_session_is_active(){
        if(isset($_SESSION['user']) && isset($_SESSION['pwd'])){
            return true;
        }
        else{
            return false;
        }
    }