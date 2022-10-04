<?php
   $op1=10;
   $op2=5;
   $operador= '/';
   switch($operador){
        case '+':
            $resultado=$op1+$op2;
            break;
        case '-':
            $resultado=$op1-$op2;
            break;
        case '*':
            $resultado=$op1*$op2;
            break;
        case '/':
            $resultado=$op1/$op2;
            break;
   }
   echo "el resultado de $op1 $operador $op2 es $resultado"
?>  