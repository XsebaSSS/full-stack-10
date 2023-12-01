<?php
$name = "";
$age = 0;

echo "digite su edad: ";
$age = readline();
echo "digite su nombre: ";
$name = readline();

if($age >= 18){
  echo "Bienvenido " . $name . " usted es mayor de edad";
}else{
  echo $age . " usted es menor de edad";
}
?>