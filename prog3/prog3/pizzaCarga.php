<?php
include_once './Pizza.php';
$myLista= Pizza::LeerArchivoJson("Pizza.json");
var_dump($myLista);
$nuevo= new Pizza($_GET["sabor"],$_GET["precio"],$_GET["tipo"],$_GET["cantidad"]);

$resultado=false;
foreach($myLista as $pizza){
    if(Pizza::SumarPizzasIguales($pizza, $nuevo)){
        $resultado=true;
        break;
    }
}
if(!$resultado){
    $myLista[count($myLista)]=$nuevo;
}
Pizza::CrearArchivoJson("Pizza.json",$myLista);

    
?>