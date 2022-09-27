<?php

session_start();

if(isset($_SESSION['nombre_usuario'])){
    echo "existe sesion";
    session_destroy();
    header("location:../index.php");

}else{
    echo "no existe sesion";
}

?>