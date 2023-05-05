<!DOCTYPE html>
<html lang="en">

    <?php
    include('config/serverUrl.php');
    include('sql/connectDB.php');

    date_default_timezone_set('America/Lima');

    if (isset($_GET["id"]))
        $id = $_GET['id'];

    $query = "select * from producto where idproducto= :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $count = $stmt->rowCount();

    if ($count > 0) {
        $data = $stmt->fetch();
    }
    ?>

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CONFIRMAR ELIMIACION PRODUCTO</title>
    </head>

    <body>
    <H1>Estas seguro que quiere eliminar?</H1>
    <form action="<?php echo SERVERURL ?> d-producto.php" method="post">
             
    </form>
    </body>
</html>