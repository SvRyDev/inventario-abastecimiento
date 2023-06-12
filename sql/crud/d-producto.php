<?php 

include('../../sql/connectDB.php');

if(!isset($_POST['idproducto'])){

$idproducto = $_POST['idproducto'];


    $query = 'DELETE FROM producto WHERE iproducto=?';


    $stmt = $conn->prepare($query);
    $result = $stmt->execute($idproducto);

    if ($result === true) {
        echo "El registro ha sido eliminado¡¡¡ ";
        //header("Location: listar.php");
    } else {
        echo "Algo salió mal. Por favor verifica que la tabla exista";
    }
    


} else{
    echo "Error de sistema";
}
    ?>