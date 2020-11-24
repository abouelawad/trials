<?php

require_once "autoload.php";

use App\Controllers\First;
use App\Controllers\inside\Internal;
use App\SayHi;
use App\Views\Second;
use Core\Hello;
use Core\Request;


$_GET['name'] = 'asfgdf';
$_GET['age'] = 25;


$request = new Request;
echo $request->get('name' , "ali");
echo '<br />';
echo $request->get('age',30);

echo '<br />';

#core/
$hello = new Hello;
echo $hello->name;

echo '<br />';

#app/
$hi = new SayHi;
echo $hi->name;

echo '<br />';

#app/controller/
$first = new First;
echo $first->name;

echo '<br />';

#app/controller/Inside
$internal = new Internal;
echo $internal->name;

echo '<br />';

#app/views/
$second = new Second;
echo $second->name;