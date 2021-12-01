<?php


$id = $_POST['id'];
$nombre = $_POST['nombre'];
$referencia = $_POST['referencia'];
$precio = $_POST['precio'];
$peso = $_POST['peso'];
$categoria = $_POST['categoria'];
$stock = $_POST['stock'];
$fechaCreacion = $_POST['fechaCreacion'];
$fechaUltVenta = $_POST['fechaUltVenta'];

$mysqli = new mysqli('127.0.0.1', 'root', '', 'productos');
    $mysqli->set_charset("utf8");
    $insert = $mysqli->query("INSERT INTO `productos` (`id`, `nombre`, `referencia`, `precio`, `peso`, `categoria`, `stock`, `fechaCreacion`, `fechaUltVenta`) VALUES ('".$id."', '".$nombre."', '".$referencia."', '".$precio."', '".$peso."', '".$categoria."', '".$stock."', '".$fechaCreacion."', '".$fechaUltVenta."');"); 

    header('Location: Principal.html');



?>