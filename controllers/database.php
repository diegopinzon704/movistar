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
   echo "conexion exitosa";
} else {
   echo "fallo";
   die(print_r(sqlsrv_errors(), true));
}
?>