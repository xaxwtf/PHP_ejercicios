<?php
include_once './Pizza.php';
$myLista= Pizza::LeerArchivoJson("Pizza.json");
echo "CONSULTAS!!!";
var_dump($myLista);
$mensaje="no se";
foreach($myLista as $actual){
    
    if($actual->sabor==$_POST['sabor'] && $actual->tipo==$_POST['tipo']){
        $mensaje="SI HAY";
        break;
    }
    elseif($actual->sabor==$_POST['sabor']&& $actual->tipo!=$_POST['tipo']){
        $mensaje= "NO EXISTE EL EL TIPO";
        break;
    }
    elseif($actual->sabor!=$_POST['sabor']&& $actual->tipo==$_POST['tipo']){
        $mensaje= "NO EXISTE EL EL SABOR";
        break;
    }
    else{
        $mensaje= "NO EXISTE NI EL TIPO NI EL SABOR";
    }
}
echo $mensaje;
?>