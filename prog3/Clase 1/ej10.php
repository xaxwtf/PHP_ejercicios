<?php
$lapicera['color']="negro";
$lapicera['marca']="bic";
$lapicera['trazo']="fina";
$lapicera['precio']=220;

$lapicera2['color']="<br/>azul";
$lapicera2['marca']="bic";
$lapicera2['trazo']="fina";
$lapicera2['precio']=220;

$lapicera3['color']="<br/>negro";
$lapicera3['marca']="pirulito";
$lapicera3['trazo']="gruesa";
$lapicera3['precio']=100;


$lapiceras[1]=$lapicera;
$lapiceras[2]=$lapicera2;
$lapiceras[3]=$lapicera3;

foreach($lapiceras as $valor){
    foreach($valor as $v){
        echo "$v ,";
    }
   
}
?>  