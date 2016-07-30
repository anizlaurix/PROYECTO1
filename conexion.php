<?php


$usario="u330732779_an";
$passwd="12345laura";
$servidor="mysql.hostinger.mx";
$BD="u330732779_fin";


$conexion=mysqli_connect($servidor,$usario,$passwd, $BD)or die("Error al conectarse a la base de datos:".mysqli_error());
//mysql_select_db($BD,$conexion);
?>
