<?php
echo "PARCIAL";
if($_SERVER['REQUEST_METHOD']=='GET'){
    include_once './pizzaCarga.php';
}
else if ($_SERVER['REQUEST_METHOD']=='POST'){
    include_once './pizzaConsultar.php';
}

?>