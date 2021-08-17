<?php
require_once '../config/init.php';

$index = new Template('../views/index.php');

$index->greeting = 'hello';


echo $index;