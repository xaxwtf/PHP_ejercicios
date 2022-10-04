<?php
$cantNumerosSumados=0;
$acumulado=0;
for($i=1;$i<1000;$i++){
    $acumulado=$acumulado+$i;
    echo " numero Actual ". $i;
    echo " ------> el acumulado es ". $acumulado ."<br>" ;
    if($acumulado>=1000){
        $cantNumerosSumados=$i-1;
        break;
    }
}
echo "se sumaron ". $cantNumerosSumados ." numeros";
?>