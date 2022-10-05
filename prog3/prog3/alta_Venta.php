<?php
include_once "./Ventas.php";
Venta::realizarVenta($_POST['mail'], $_POST['sabor'], $_POST['tipo'], $_POST['cantidad']);
?>