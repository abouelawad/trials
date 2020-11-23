<?php

use Core\Request;

require_once "autoload.php";

$_GET['name'] = 'asfgdf';
$_GET['age'] = 25;

  

$request = new Request;
echo $request->get('name' , "aliii");
echo $request->get('age',30);