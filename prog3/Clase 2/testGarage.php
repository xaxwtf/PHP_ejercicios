<?php
include_once "./ej18.php";
include_once "./ej17.php";
$garage=new Garaje("no se como llamarlo");
$garage->Add($primero);
$garage->Add($segundo);
$garage->Add($tercero);
$garage->Add($cuarto);
$garage->Add($quinto);
echo "</br></br>  TEST MOSTRAR GARAJE </br>";
$garage->MostrarGaraje(); 
echo "</br></br>  REMOVE </br>";
$garage->Remove($primero);
echo "</br></br>  resultado </br>";
$garage->MostrarGaraje(); 
echo "</br></br>  resultado </br>";
$garage->EsJson();

?>