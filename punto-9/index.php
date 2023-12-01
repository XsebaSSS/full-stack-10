<?php
$numero = 0;
$i = 0;

echo "digite el numero a multiplicar: ";
$numero = readline();

while($i <= 30){ 
  $result = $numero * $i;
  echo  $numero . " x " . $i . " = " . $result . "\n";
  $i++;
}
?>