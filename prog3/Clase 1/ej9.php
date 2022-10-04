<?php
$lapicera['color']="negro";
$lapicera['marca']="bic";
$lapicera['trazo']="fina";
$lapicera['precio']=220;

$lapicera2['color']="azul";
$lapicera2['marca']="bic";
$lapicera2['trazo']="fina";
$lapicera2['precio']=220;

$lapicera3['color']="negro";
$lapicera3['marca']="pirulito";
$lapicera3['trazo']="gruesa";
$lapicera3['precio']=100;
foreach($lapicera as $valor){ 
    echo "$valor<br/> ";
}
echo "<br/>";
foreach($lapicera2 as $valor){ 
    echo "$valor<br/>";
}
echo "<br/>";
foreach($lapicera3 as $valor){ 
    echo "$valor<br/>";
}
?>  