<?php



$url= $_SERVER["REQUEST_URI"];
$result = explode('=',$url);
@$idb = (int)$result[1];
borrar(@$idb);

function borrar($id){
    $mysqli = new mysqli('127.0.0.1', 'root', '', 'productos');
    $mysqli->set_charset("utf8");
    $delete = $mysqli->query("DELETE FROM productos WHERE id=".$id.""); 
    echo '<center><a href="http://localhost/productos/Lectura.php">Actualizar Registros</a></center>';
} 

?>