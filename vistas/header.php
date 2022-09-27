<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="relly garcia">
        <meta name="description" content="para una persona muy especial">
        <meta name="keywords" content="informacion desde mi base">
        <title>Beatriz Moda</title>
        <link rel="icon" href="../img/head.jpg">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">       
        <link href="../css/stilos.css" type="text/css" rel="stylesheet" media="">
        <script src="https://kit.fontawesome.com/a32df748a4.js" crossorigin="anonymous"></script>
    
    </head>


    <!--inicia cabezote--

    <header>

        <nav class="barra_n">
             <li class="boton">inventario</li>
             <li class="boton">cuentas</li>
             <li class="boton">compra</li>
             <li class="boton">clientes</li>
        </nav>

    </header>-->

    <!--cierre cabezote-->

    <body>
        <div class="icono-menu">
            <img src="../img/bars-solid.svg" id="icono-menu">
        </div>

        <div class="cont-menu active" id="menu">
            <ul>
                <a href="./inicio.php"><li>inicio</li></a>
                <a href="./inventario.php"><li>inventario</li></a>
                <a href="./clientes.php"><li>clientes</li></a>
                <a href="./cuentas.php"><li>cuentas</li></a>
                <a href="./compra.php"><li>compras</li></a>
                <a href="./pedidos.php"><li>pedidos</li></a>

                <?php
                session_start();
                if(isset($_SESSION['nombre_usuario'])){
                echo "<a href='../bases_datos/cerrar_sesion.php'><li>salir</li></a>";
                }else{
                echo "no existe sesion";
                header("location:../index.php");
                }

                ?>
            </ul>

        </div>

        <script src="../js/app.js"></script>