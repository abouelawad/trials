<?php

// spl_autoload_register();


//! THIS WAY is not effective for me 
// spl_autoload_register("printClassName");
// function printClassName($className)
// {
//   $explodedClassName = explode("\\", $className);
//   $classEndName = end($explodedClassName);
//   print_r($classEndName);
//   echo '<br />';
// }


//* THE SAME EFFECT OF THE PLAIN "spl_autoload_register"
spl_autoload_register("getClassName");
function getClassName($className)
{
  $filePath = lcfirst($className) . ".php";
  require_once $filePath;
}
