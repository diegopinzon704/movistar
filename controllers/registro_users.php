<?php
$serverName = "DESKTOP-71KFE54\SQLEXPRESS";
$dbname = "telefonica";
$username = "";
$passworddb = "";

$connectionInfo = array(
   "Database" => $dbname,
   "UID" => $username,
   "PWD" => $passworddb,
   "CharacterSet" => "Utf-8");

$conn = sqlsrv_connect ($serverName, $connectionInfo);

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