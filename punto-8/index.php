<?php

 const  TICKET_PRICE = 25000;
 $memberShip = "";
 $numerPerson = 0;

 echo "digite el numero de personas: ";
   $numerPerson = readline();
 echo "digite que tipo membresia: ";
   $memberShip = readline();
 $totalPay = $numerPerson * TICKET_PRICE;

 switch (strtoupper($memberShip)) {
   case "A":
      $totalPay = $totalPay * 0.5;
      break;
   case "B":
     $totalPay = $totalPay * 0.6;
     break;
   case "C":
     $totalPay = $totalPay * 0.7;
     break;
   case "D":
      $totalPay = $totalPay * 0.8;
      break;
   case "E":
      $totalPay = $totalPay * 0.9;
      break;
   case "F":
      $totalPay = $totalPay * 0.95;
      break;
   default:
     echo "Esta afiliacion no cuneta con descuento: ";
 }
   echo "el total a pagar es: $ " . number_format($totalPay);
?>