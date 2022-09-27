<?php

//AQUI CONECTAMOS A LA BASE DE DATOS DE POSTGRES
//$conex = "host=10.10.71.13 port=5432 dbname=bd_prueba user=postgres password=#fund4b1t";
//$cnx = pg_connect($conex) or die ("<h1>Error de conexion.</h1> ". pg_last_error());
require 'conexion_postgres.php';
session_start();
$usuario=$_POST['user'];
$clave=$_POST['pass'];

$query="SELECT * FROM usuario WHERE nombre='$usuario' AND clave='$clave'";
$consulta=pg_query($conexion,$query);
$cantidad=pg_fetch_array($consulta); //or die (pg_last_error($conexion));
if($cantidad>0){
    $_SESSION['nombre_usuario']=$usuario;
    header("location: ../funcion/inicio.php");
    
}else{
   
   header("location: ../error_creden.php");
  // echo "datos incorrectos";


}

?>