<?php

$port = "26257";
$dburl = "arrow-shade-3774.g8z.cockroachlabs.cloud";
$dbpassword = "zQWSChuOOY8Im2Jp7f0_0w";
$dbuser = "daniel";
$dbname = "arrow-shade-3774.defaultdb";

$dsn = "pgsql:host=".$dburl.";port=".$port.";dbname=".$dbname.";user=".$dbuser.";password=".$dbpassword;


try{
 // create a PostgreSQL database connection
 $conn = new PDO($dsn);

} catch (PDOException $e){
 // report error message
 echo $e->getMessage();
}

?>