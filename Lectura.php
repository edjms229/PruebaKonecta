<?php

include("borrar.php");
$mysqli = new mysqli('127.0.0.1', 'root', '', 'productos');
$mysqli->set_charset("utf8");

$res = $mysqli->query("SELECT * FROM productos");

echo "<table border='1' align='center'>
<tr bgcolor='#E6E6E6'>
<td>ID</td>
<td>NOMBRE</td>
<td>REFERENCIA</td>
<td>PRECIO</td>
<td>PESO</td>
<td>CATEGORIA</td>
<td>STOCK</td>
<td>FECHA DE CREACION</td>
<td>FECHA ULTIMA VENTA</td>
</tr>";

while($f = $res->fetch_object()){
    //echo $f->nombre;

    echo "
         <tr>
            <td>".$f->id."</td>
            <td>".$f->nombre."</td>
            <td>".$f->referencia."</td>
            <td>".$f->precio."</td>
            <td>".$f->peso."</td>
            <td>".$f->categoria."</td>
            <td>".$f->stock."</td>
            <td>".$f->fechaCreacion."</td>
            <td>".$f->fechaUltVenta."</td>
            <td><a href='borrar.php?borrar=".$f->id."'>Borrar</a></td>
            <td><a href='Actualizar.html'>Actualizar</a></td>
        </tr>";

}







?>