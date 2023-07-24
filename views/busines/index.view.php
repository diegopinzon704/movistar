
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="views/css/styles.css">
    <link rel="shortcut icon" href="views/img/pira.jpeg">
</head>

<body>
    <div class="container">

        <div class="card-group">
            <div class="card caja1">
                <img src="views/img/pira2.jpeg" class="img1">


            </div>

            <div class="card caja2">

                <div class="card-body color">
                    <br>
                    <div >
                    <h1 class="card-title centrar letra3" id="titulo">Telefónica Movistar</1>
                    </div>
                        <br><br>
                        <h2 class="card-title centrar letra4" >Iniciar Sesión</h2>
                        <br>
                        <form class="" action="views/dashboard/dashboard.php" method="POST">

                            <div class="form-group">
                                <h6 class="card-title centrar letra">Usuario</h6>
                                <input type="text" class="form-control" placeholder="Escriba su usuario" required>

                            </div>
                            <div class="form-group">
                                <h6 class="card-title centrar letra">Contraseña</h6>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Escriba su contraseña" required>
                            </div>
                            <div class="centrar">
                                <a href="?c=Landing&a=crearcuenta" class="color letra">Crear cuenta</a>
                            </div>
                            <div class="centrar">
                                <a href="?c=Landing&a=olvido" class="color letra">¿Olvidó su contraseña?</a>
                            </div>
                            <br>
                            <div>
                                <input type="submit" name="ingresar" value="Ingresar" class="btn btn-success input1">
                            </div>



                        </form>
                </div>

            </div>
        </div>





    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>


</body>


</html>