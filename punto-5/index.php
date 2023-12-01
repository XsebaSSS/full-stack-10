<?php
const TICKET = 25000;
$person = 0;
$chipTipe = "";

echo "digite el numero de personas: ";
$person = readline();

echo "digite el tipo de membresia: ";
$chipTipe = strtoupper(readline());
$result = $person * TICKET;

if ($chipTipe == "A" || $chipTipe == "B"){
  $result = $result * 0.7;
} else {
  echo "su descuento es de: \n";
}
echo "el total a pagar es: " . $result;
?>