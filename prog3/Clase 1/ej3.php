<?php

    $a=1;
    $b=2; 
    $c=3;

    $todoFalse=true;
    if(($a>$b && $a<$c) || ($a>$c && $a<$b)){
        $mensaje="A=$a es el que esta en el medio";
        $todoFalse=false;
    }

    if(($b>$a && $b<$c) || ($b>$c && $b<$a)){
        $mensaje="B=$b es el que esta en el medio";
        $todoFalse=false;
    }
  
   
    if(($c>$a && $c<$b) || ($c>$b && $c<$a)){
        $mensaje="C=$c es el que esta en el medio";
        $todoFalse=false;
    }
    
    if($todoFalse){
        $mensaje ="NO HAY NUMERO MEDIO";
    }
    

    echo $mensaje;

?>  