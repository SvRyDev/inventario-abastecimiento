<?php

$port = "26257";
$dburl = "arrow-shade-3774.g8z.cockroachlabs.cloud";
$dbpassword = "UnI1_fcAHO0nxOqy7Fx7TQ";
$dbuser = "daniel";
$dbname = "arrow-shade-3774.defaultdb";

$dsn = "pgsql:host=".$dburl.";port=".$port.";dbname=".$dbname.";user=".$dbuser.";password=".$dbpassword;

// if (!$conn) {
//     echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
//     echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
//     echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
//     exit;
// }
// /*
// echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
// echo "Información del host: " . mysqli_get_host_info($conn) . PHP_EOL; */

// /* mysqli_close($conn);*/



try{
 // create a PostgreSQL database connection
 $conn = new PDO($dsn);
 
 // display a message if connected to the PostgreSQL successfully
 if($conn){
    // echo "Connected to the <strong>$dbname</strong> database successfully!";
    // $query = "select * from producto";
    // foreach($conn->query($query) as $row){
    //     echo $row['producto'] . "<br/>"; 
    // }
 }
} catch (PDOException $e){
 // report error message
 echo $e->getMessage();
}