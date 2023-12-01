<?php
include"./operetion.php";

$numerOne = 0;
$numerTwo = 0;
$option = "";


$numerOne = getNumer();
$numerTwo = getNumer();
$option = showNumer();


$result = operate($numerOne, $numerTwo, $option);

echo "El resultado es: " . $result;



function getNumer(){
    echo "ingrese un numero a operar:";
    return  readline();
  }
  
  function showNumer(){
    echo "que operacion quiere hacer: \n";
    echo "1 - suma \n";
    echo "2 - resta \n";
    echo "3 - multiplicar \n";
    echo "4 - dividir \n";
    return  readline();
  }
  
  function operate($x, $y, $option){
    switch($option){ 
     case 1:
       return add($x, $y);
     case 2:
       return sub($x, $y);
     case  3:
      return dot($x, $y);
     case 4:
      return split($x, $y);
     default:
       echo "opcion no valida: ";
      return 0;
    }
  
  }
  function add($x, $y){
    return  $x + $y;
    
  }
  
  function sub($x, $y){
    return  $x - $y;
  }
  
  function dot($x, $y){
    return   $x * $y;
  }
  
  function split($x, $y){
    return  $x / $y;
  }
  
  

?>