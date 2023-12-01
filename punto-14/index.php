<?php
include "./new.php";

$useer = "";
$pasWord = "";

echo "Digite su usuario a registrar: ";
$useer = readline();

echo "Digite su contraseña: ";
$pasWord = readline();

if(hasSecurity($pasWord)){  
 if(hasUpperLetter($pasWord)){
   if(hasNumer($pasWord)){
     echo "su contraseña si es segura:";
   }else{
   echo "su contraseña no cumple con numeros:";
}  
}else{
  echo "su contraseña no cumple conletras mayusculas: ";
}
  
}else{
  echo "su contraseña no cumple con la longitud: ";
}



function hasSecurity($pass){ 
    return  strlen($pass) >= 8;
}
   
function hasUpperLetter($pass){
   $arrayPass = str_split($pass);
  foreach($arrayPass as $letter){
    if($letter = strtoupper($letter)){
      return true;
    }
  }
  return false;
}
function hasNumer($pass){
  $arrayPass = str_split($pass);
 foreach($arrayPass as $letter) {
    if(is_numeric($letter)) {
       return true;
    }
  }
  return false;
}  

?>