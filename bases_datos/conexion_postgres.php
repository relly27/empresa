<?php
//declarar variables de la conexion
$servidor = "localhost";
$db = "empresa";
$user = "postgres";
$password = "27561321";

$conexion=pg_connect("host=$servidor user=$user password=$password dbname=$db"); // or die ("<h1>Error de conexion.</h1> ". pg_last_error()); //or die (pg_last_error('error al conectar la base de datos')); //return $conexion;

/*if($conexion<0)
{
    echo "conexion exitosa";
}

else{
    echo "no se pudo conectar";
}*/


?>