<?php

// $_POST;
// print_r($_POST);

if(!$_POST) {
  header('Location: http://localhost/curso_php/forms/');
} 
  $name= $_POST['name'];
  $sex= $_POST['sex'];
  $year= $_POST['year'];
  $terms= $_POST['terms'];
  
  echo "Hola " . $name . " naciste en el año " . $year  . ".";