<?php

namespace src;

class Person
{

  function __construct(){
    echo "My name is Panos <br>";
  }
    
}

$person = new Person();

define('PI', 3.14);
echo PI;

$bool = defined('PI');
echo '<br>';
var_dump($bool);

// echo '<pre>';
// var_dump($_SERVER);
// echo '</pre>';

