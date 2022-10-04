<?php
    $palabra="HOLA";
    $palabraInvertida="";
    $len= strlen($palabra);
    for($i=$len,$k=-1; $i>0 ;$i--){
        $aux=substr($palabra, $k,1);
        $palabraInvertida= "$palabraInvertida$aux";
        $k--;
    }
    echo "$palabra y su inverso es: $palabraInvertida";
?>  
