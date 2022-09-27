<?php

//include './bases_datos/conexion_postgres.php';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="utf-8">
    <meta name="author" content="relly garcia">
    <meta name="description" content="para una persona muy especial">
    <meta name="keywords" content="informacion desde mi base">
    <title>Beatriz Moda</title>
    <link rel="icon" href="img/head.jpg">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">
    <link href="css\inicio.css" type="text/css" rel="stylesheet" media="">

</head>



<body>

    <header>


    </header>

    <div class="cuerpo">

        <div class="caja_usuario">

            

                <div class="caja_tex">

                    <h1>Beatriz Moda</h1>

                    <form action="./bases_datos/sesion.php" method="POST">
                                
                        <div class="form-element">

                            <input type="text" name="user" placeholder="usuario" pattern="[a-zA-Z0-9]+" required />
                    

                            <input type="password" name="pass" placeholder="contraseña" required  />
                    
                        </div>
                
                
                        <button type="submit" name="login" value="login">iniciar sesion</button>

                    </form>

                </div>              
        </div>

    </div>

    <footer class="pie">

        <div class="copy">

            &copy; todos los derechos reservados. ca

        </div>

    </footer>

</body>

</html>