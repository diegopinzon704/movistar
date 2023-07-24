<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="views/css/styles.css">
    <link rel="shortcut icon" href="views/img/pira.jpeg">
</head>

<body">
    <div class="container">

        <div class="card-group">
            <div class="card caja1">
                <img src="views/img/pira2.jpeg" class="img1">


            </div>

            <div class="card caja2">

                <div class="card-body color">
                    <br>
                    <div>
                        <h1 class="card-title centrar letra3" id="titulo">Crear Cuenta</1>
                    </div>
                    <br><br>
                    <h2 class="card-title centrar letra4">Registro</h2>
                    <br>
                    <form class="" action="registrousers.php" method="POST">

                        <div class="form-group">
                            <h6 class="card-title centrar letra">Nombre Usuario</h6>
                            <input type="text" class="form-control" placeholder="Escriba su nombre de usuario" name="nombreuser" required>

                        </div>
                        <div class="form-group">
                            <h6 class="card-title centrar letra">Contraseña</h6>
                            <input type="password" class="form-control" name="contra" placeholder="Escriba su contraseña" required>
                        </div>
                        <div class="form-group">
                            <h6 class="card-title centrar letra">Correo electrónico</h6>
                            <input type="email" class="form-control" placeholder="Escriba su correo electrónico" name="email" required>
                        </div>
                        <br>
                        <div>
                            <input type="submit" name="registrar" value="Registrarme" class="btn btn-success input1">
                        </div>



                    </form>
                    <br>
                    <a href="?c=Landing&a=index" class="btn btn-success input1">atrás</a>
                </div>
                <?php
                $serverName = "DESKTOP-71KFE54\SQLEXPRESS";
                $dbname = "telefonica";
                $username = "";
                $passworddb = "";

                $connectionInfo = array(
                    "Database" => $dbname,
                    "UID" => $username,
                    "PWD" => $passworddb,
                    "CharacterSet" => "Utf-8"
                );

                $conn = sqlsrv_connect($serverName, $connectionInfo);

                if ($conn) {
                    echo "";
                } else {
                    echo "fallo";
                    die(print_r(sqlsrv_errors(), true));
                }
                ?>

                <?php

                if (isset($_POST['registrar'])) {
                    $usuario = $_POST['nombreuser'];
                    $password = md5($_POST['contra']);
                    $email = $_POST['email'];

                    $insertars = "INSERT INTO users(usuario,password,correo)VALUES('$usuario','$password', '$email')";

                    $execute = sqlsrv_query($conn, $insertars);

                    if ($execute) {
                        echo "<script>alert('Usuario Registrado')</script>";
                        echo "<script>window.open('../?c=Landing&a=index', '_self')</script>";
                    }
                }

                ?>

            </div>
        </div>





    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>


    </body>


</html>