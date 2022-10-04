<?php
    function validarPalabra($palabra, $max){
        $r=0;
        if(strlen($palabra)<=$max){
            if($palabra=="Recuperatorio"|| $palabra=="Parcial" || $palabra=="Programacion"){
                $r=1;
            }
        }
        return $r;
    }
    $miPalabra="Programacion";
    $miMax=2;
    echo "la palabra es $miPalabra y el tamaño max es $miMax  resulado <br/>";
    echo validarPalabra($miPalabra, $miMax);
?>  