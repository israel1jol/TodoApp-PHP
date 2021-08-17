<?php
require_once '../config/init.php';

$logoutTmp = new Template('../views/logout.php');

if(user_session_is_active()){
    session_destroy();
    echo $logoutTmp;
}

