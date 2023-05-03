<?php 
include(SERVERURL . 'sql/crus/insert-product.php');


$codigo = $_POST['fcodigo'];
$referencia = $_POST['freferencia'];
$idtipo = $_POST['ftipo'];
$nombre = $_POST['fnombre'];
$precio = $_POST['fprecio'];
$f_creacion = $_POST['ffcreacion'];
$f_ingreso = $_POST['ffingreso'];
$f_actualizacion = $_POST['ffactualizacion'];
$estado = $_POST['festado'];

$query = "INSERT INTO producto (codigo, referencia idtipo, producto, stock, precio, fechacreacion, fechaingreso, fechaactualizacion, estado)"
. "VALUES (?,?,?)";
$stmt= $conn->prepare($query);
$stmt->execute([$name, $surname, $sex]);


?>