<?php
$numer1 = 0;
$numer2 = 0;

echo "Ingrese el primer numero a operar: ";
$numer1 = readline();

echo "Ingrese el segundo numero a operar: ";
$numer2 = readline();

$choose = 0;

echo "Eliga el numero a la operacion que quirer realizar: \n";
echo "1 - sumar \n";
echo "2 - restar \n";
echo "3 - multiplicar \n";
echo "4 - dividir \n";
$choose  = readline();

switch($choose){ 
 case 1:
   $result = $numer1 + $numer2;
  break;
 case 2:
  $result = $numer1 - $numer2;
  break;
 case  3:
  $result = $numer1 * $numer2;
  break;
 case 4:
  $result = $numer1 / $numer2;
  break;
 default:
  echo $result;
   echo "opcion no valida: ";
}  
echo "El resultado es: " . $result;
?>
