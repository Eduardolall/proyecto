<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Objetos Perdidos</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>


<?php include("php/menu.php"); ?>

<!-- Masthead-->
<header class="masthead">
    <div class="container" >
        <div class="row">
            <div class="col"></div>
            <div class="col text-center">
                <div class="card mt-3">
                    <div class="card-header" style="color:black">
                        Inicio de sesión
                    </div>
                    <div class="card-body">
                    <form id="contactForm" name="contactForm" data-sb-form-api-token="API_TOKEN" method="post" action="validarusuario.php">
                        <div class="input-group">
                            <input class="form-control" name="txt_Mail" id="txt_Mail" type="text" placeholder="Correo Electronico" data-sb-validations="required">
                        </div>
                        <div class="input-group mt-3">
                            <input class="form-control" name="passw" id="passw" type="password" placeholder="Contraseña" data-sb-validations="required">
                        </div>
                    </div>
                    <div class="card-footer" style="background:white">
                        <input type="submit" value="Ingresar" class="text-center">
                    </div>
                <p class="pLog" style="color:black">Hola inicia sesion para que puedas realizar tu publicacion</p>
                <p class="pLog" style="color:black">¿No tienes una cuenta?<a class="linkLog" href="registrar.php" style="color:blue"> Registrate</a></p>
                </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
</header>

<body id="page-top">
    <?php include("php/menu.php"); ?>

</body>