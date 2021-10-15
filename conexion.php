<?php  

  $servidor="localhost";
  $nombreusuario="root";
  $password="";
  $db="cef152";

  /*$servidor="localhost";
  $nombreusuario="u434167263_cef";
  $password="cef152sitioweb";
  $db="u434167263_cef152";*/


$conexion=new mysqli($servidor, $nombreusuario, $password, $db);

if($conexion->connect_error){
	die("Connexión fallida: " . $conexion->connect_error);
}

?>
