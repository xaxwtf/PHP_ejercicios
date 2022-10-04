<?php
    $num=43;
    $decena;
    $unidad ="";
    $aux;
    if($num>=20 && $num<30 ){
        $decena= "veinte";
        $aux=$num-20;
    }
    else if($num>=30 && $num<40 ){
        $decena= "treinta";
        $aux=$num-30;
    }
    else if($num>=40&& $num<50){
        $decena="cuarenta";
        $aux=$num-40;
    }
    else if($num>=50 && $num<60){
        $decena="cincuenta";
        $aux=$num-50;
    }
    else if($num==60){
        $decena="sesenta";
        $aux=$num-60;
    }
    switch($aux){
        case 1:
            $unidad="y uno";
            break;
        case 2:
            $unidad="y dos";
            break;
        case 3:
            $unidad="y tres";
            break;
        case 4:
            $unidad="y cuatro";
            break;
        case 5:
            $unidad="y cinco";
            break;
        case 6:
            $unidad="y seis";
            break;
        case 7:
            $unidad="y siete";
            break;
        case 8:
            $unidad="y ocho";
            break;
        case 9:
            $unidad="y nueve";
            break;
    }
    echo "el numero es $num  $decena $unidad";

?>  