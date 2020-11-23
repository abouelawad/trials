<?php

use App\SayHi;
use Core\Request;

require_once "autoload.php";

$_GET['name'] = 'asfgdf';
$_GET['age'] = 25;

  

$request = new Request;
echo $request->get('name' , "aliii");
echo $request->get('age',30);

$hi = new SayHi;
echo $hi->name;