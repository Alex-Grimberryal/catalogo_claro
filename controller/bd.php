<?php
$servidor="localhost";
$usuario="root";
$clave="";
$basedatos="catalo_claro"; 
$con = new PDO("mysql:host=$servidor;dbname=$basedatos;charset=UTF8", $usuario, $clave);

?>