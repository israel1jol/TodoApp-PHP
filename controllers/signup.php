<?php
require_once '../config/init.php';

$signup = new Template('../views/signup.php');

if(isset($_POST['submit'])){
    $fname = html_entity_decode($_POST['fname']);
    $lname = html_entity_decode($_POST['lname']);
    $username = html_entity_decode($_POST['username']);
    $email = html_entity_decode($_POST['email']);
    $pwd = html_entity_decode($_POST['pwd']);

    if(checkuser($username, $email)){
        $signup->error = 'Username or Email already associated with an account';

    }
    else{
        $user = new User();
        $pwd = $user->encryptPwd($pwd);
        $user->createUser($fname, $lname, $username, $email, $pwd);
        redirect('todos.php', $user, $pwd);
    }
    
}

echo $signup;