<?php
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

if (($usuario == 'admin') && ($contrasena == 'admin')){
  // echo "HOLAAAA";
header('Location: Principal.html');
}else{
   header('Location: index.html');
}


?>