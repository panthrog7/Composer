<?php

namespace \app\test;

class Person
{

  function __construct(){
      echo "Hallo from the space";

    }
    
}

define('PI', 3.14);
echo PI;

$bool = defined('PI');
echo '<br>';
var_dump($bool);

echo '<pre>';
var_dump($_SERVER);
echo '</pre>';

