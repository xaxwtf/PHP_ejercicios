<?php

$nums=array((int)rand(1,10),(int)rand(1,10),(int)rand(1,10),(int)rand(1,10),(int)rand(1,10));
$total=0;
$promedio;
$mensaje="";
foreach($nums as $num){ 
    $total=$total+$num;
}
$len = count($nums);
$promedio=((double)$total) / $len ;

var_dump($nums);
echo " <br> el promedio es:".$promedio;
if($promedio>6){
    $mensaje="el promedio es mayor 6";
}
else if($promedio<6){
    $mensaje="el promedio es menor 6";
}
else{
    $mensaje="el promedio es 6";
}
echo "<br>".$mensaje;
?>  