<?php

$numero = 0;

echo "digite el numero a multiplicar: ";
$numero = readline();

for($i = 0; $i <= 30; $i++){ 
  $result = $numero * $i;
  echo $numero . " x " . $i . " = " . $result . "\n";
}
?>