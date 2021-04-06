<?php 
$usuario = "root";
$puerto = "3308";
$contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
$servidor = "localhost";
$basededatos = "escuela";

$conexion = mysqli_connect( $servidor.":".$puerto, $usuario, $contrasena ) or die ("No se ha podido conectar al servidor de Base de datos");

$db = mysqli_select_db( $conexion, $basededatos ) or die ("Upps! Pues va a ser que no se ha podido conectar a la base de datos");
?>