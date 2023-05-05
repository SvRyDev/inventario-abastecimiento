<?php 
date_default_timezone_set('America/Lima');

include('../../sql/connectDB.php');

if(!isset($_POST['fcodigo']) || !isset($_POST['freferencia']) || !isset($_POST['ftipo']) || !isset($_POST['fnombre']) || !isset($_POST['fcantidad']) || !isset($_POST['fprecio']) || !isset($_POST['ffcreacion']) || !isset($_POST['ffingreso']) || !isset($_POST['ffactualizacion']) || !isset($_POST['festado'])){

$uid = $_POST['fid'];    
$codigo = $_POST['fcodigo'];
$referencia = $_POST['freferencia'];
$idtipo = $_POST['ftipo'];
$nombre = $_POST['fnombre'];
$cantidad = intval($_POST['fcantidad']);
$precio = doubleval($_POST['fprecio']);
$f_actualizacion = date('Y-m-d h:i:s');
$estado =  isset($_POST['festado']) ? "1" : "0";

    $query = 'UPDATE producto '
            . 'SET '
            . 'codigo=?, '
            . 'referencia=?, '
            . 'idtipo=?, '
            . 'producto=?, '
            . 'stock=?, '
            . 'precio=?, '
            . 'fechaactualizacion=?, '
            . 'estado=? WHERE idproducto=?';


    $stmt = $conn->prepare($query);
    $result = $stmt->execute([$codigo, $referencia, $idtipo, $nombre, $cantidad, $precio, $f_actualizacion, $estado, $uid]);

    if ($result === true) {
        echo "Datos Actualizado¡¡¡ ";
       
    } else {
        echo "Algo salió mal. Revise la documentacion.";
    }
    


} else{
    echo "no esta completo los datos";
}
    ?>