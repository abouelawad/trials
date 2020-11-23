<?php

use App\Controllers\First;
use App\SayHi;
use App\Views\Second;
use Core\Request;

require_once "autoload.php";

$_GET['name'] = 'asfgdf';
$_GET['age'] = 25;


$request = new Request;
echo $request->get('name' , "aliii");
echo $request->get('age',30);

echo '<br />';

$hi = new SayHi;
echo $hi->name;

echo '<br />';

$first = new First;
echo $first->name;

echo '<br />';

$second = new Second;
echo $second->hello;