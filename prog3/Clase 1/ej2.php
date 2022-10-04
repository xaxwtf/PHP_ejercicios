<?php

    $dia_actual = (int)date("d");
    $mes_actual=(int)date('n');
    $anio_actual = (int)date("Y");
    $estacion;
    switch($mes_actual){
        case 1:

        case 2:
            $estacion ="Verano";
            break;
        case 3:
            if( $dia_actual>20 )
            {
                $estacion ="Otoño";
            }
            else{
                $estacion ="Verano";
            }
            break;
        case 4:

        case 5:
            $estacion ="Otoño";
            break;
        case 6:
            if( $dia_actual<21){
                $estacion ="Otoño";
            }else{
                $estacion ="Invierno";
            }
            break;
        case 7:
            
        case 8:
            $estacion ="Invierno";
            break;
        case 9:
            if($dia_actual<21){
                $estacion ="Invierno";
            }
            else{
                $estacion ="Primavera";
            }
            break;
        case 10:
          
        case 11:
            $estacion ="Primavera";
            break;
        case 12:
            if($dia_actual<21){
                $estacion ="Primavera"; 
            }
            else{
                $estacion ="verano";
            }
            break;               
    }
    echo "hoy: $dia_actual/$mes_actual/$anio_actual es $estacion";
?>  