<?php
//config file in config folder
require_once 'config.php';

//require helpers file
require_once '../helpers/system_helpers.php';

//Includes Class in module when object instantiates
function init_autoload($classname){
    if(file_exists("../lib/$classname.php")){ 
        require_once "../lib/$classname.php";
    }
    else{
        require_once "../models/$classname.php";
    }
    
}

//Register custom autoload function
spl_autoload_register('init_autoload');