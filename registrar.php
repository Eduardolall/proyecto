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

    <?php include("connection.php"); ?>

</head>


<header class="masthead2">
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col text-center">
                <div class="card mt-3">
                    <div class="card-header" style="color:black">
                        Registro
                    </div>
                    <div class="card-body">
                        <form id="contactForm" name="contactForm" data-sb-form-api-token="API_TOKEN" method="post" action="#">
                            <div class="input-group">
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                                <input class="form-control" name="txt_Name" id="txt_Name" type="text" placeholder="Nombre completo" data-sb-validations="required">
                            </div>
                            <div class="input-group">
                                <input class="form-control" name="txt_apellidop" id="txt_apellidop" type="text" placeholder="Apellido Paterno" data-sb-validations="required,email">
                            </div>
                            <div class="input-group">
                                <input class="form-control" name="txt_apellidom" id="txt_apellidom" type="text" placeholder="Apellido Materno" data-sb-validations="required">
                            </div>
                            <div class="input-group">
                                <input class="form-control" name="txt_Mail" id="txt_Mail" type="text" placeholder="Correo Electronico" data-sb-validations="required">
                            </div>
                            <div class="input-group">
                                <input class="form-control" name="passw" id="passw" type="password" placeholder="Contraseña" data-sb-validations="required">
                            </div>
                            <br>
                            <input type="submit" value="Registrate" class="text-center">
                    </div>
                    <p class="pLog" style="color:black">Hola registrate para que puedas participar</p>
                    <p class="pLog" style="color:black">Ya tengo cuenta<a class="linkLog" href="login.php" style="color:blue"> Iniciar sesion</a></p>
               
                </div>
            </div>
            <div class="col"></div>
        </div>
        </form>
    </div>
    <?php

    if (
        isset($_POST['txt_Name'])
        && isset($_POST['txt_apellidop'])
        && isset($_POST['txt_apellidom'])
        && isset($_POST['txt_Mail'])
        && isset($_POST['passw'])
    ) {
        $con = connection();
        $sql = $con->prepare("INSERT INTO users VALUES(:i, :q, :e, :d, :t)");
        $sql->bindValue(":i", $_POST['txt_Name']);
        $sql->bindValue(":q", $_POST['txt_apellidop']);
        $sql->bindValue(":e", $_POST['txt_apellidom']);
        $sql->bindValue(":d", $_POST['txt_Mail']);
        $sql->bindValue(":t", $_POST['passw']);
        $sql->execute();
        echo json_encode(["status" => "agregado"]);
    } else {
        header("HTTP/1.1 400 Bad Request");
    }
    ?>
</header>

<body id="page-top">
    <?php include("php/menu.php"); ?>
</body>