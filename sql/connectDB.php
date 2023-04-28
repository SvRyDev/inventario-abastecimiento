<?php

$dburl = "bdmf0m08ckw327poby6g-mysql.services.clever-cloud.com";
$dbpassword = "YCgzZyoQ5YDvVFDwAlRH";
$dbuser = "uc6o06vgx6dxz6bk";
$dbname = "bdmf0m08ckw327poby6g";

$conn = mysqli_connect($dburl, $dbuser, $dbpassword,  $dbname);

if (!$conn) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
/*
echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($conn) . PHP_EOL; */

/* mysqli_close($conn);*/
?>
