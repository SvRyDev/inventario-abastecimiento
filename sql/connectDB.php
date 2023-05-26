<?php

$port = "26257";
$dburl = "arrow-shade-3774.g8z.cockroachlabs.cloud";
$dbpassword = "UnI1_fcAHO0nxOqy7Fx7TQ";
$dbuser = "daniel";
$dbname = "arrow-shade-3774.defaultdb";

$dsn = "pgsql:host=".$dburl.";port=".$port.";dbname=".$dbname.";user=".$dbuser.";password=".$dbpassword;

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