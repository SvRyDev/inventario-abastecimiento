<?php 

//corregir la direccion del ServerUrl.php
//include('../../config/serverUrl.php');

date_default_timezone_set('America/Lima');

include('../../sql/connectDB.php');

if(!isset($_POST['fcodigo']) || !isset($_POST['freferencia']) || !isset($_POST['ftipo']) || !isset($_POST['fnombre']) || !isset($_POST['fcantidad']) || !isset($_POST['fprecio']) || !isset($_POST['ffcreacion']) || !isset($_POST['ffingreso']) || !isset($_POST['ffactualizacion']) || !isset($_POST['festado'])){

$codigo = $_POST['fcodigo'];
$referencia = $_POST['freferencia'];
$idtipo = $_POST['ftipo'];
$nombre = $_POST['fnombre'];
$cantidad = intval($_POST['fcantidad']);
$precio = doubleval($_POST['fprecio']);
$f_creacion = date('Y-m-d h:i:s');

$estado =  isset($_POST['festado']) ? "1" : "0";

    $query = 'INSERT INTO producto (codigo, referencia, idtipo, producto, stock, precio, fechacreacion, fechaingreso, fechaactualizacion, estado) VALUES (?,?,?,?,?,?,?,?,?,?)';


    $stmt = $conn->prepare($query);
    $result = $stmt->execute([$codigo, $referencia, $idtipo, $nombre, $cantidad, $precio, $f_creacion, $f_creacion, $f_creacion, $estado]);

    if ($result === true) {
        echo "Datos Guardados¡¡¡ ";
        //header("Location: listar.php");
    } else {
        echo "Algo salió mal. Por favor verifica que la tabla exista";
    }
    


} else{
    echo "no esta completo los datos";
}
    ?>