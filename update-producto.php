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
        <title>AGREGAR NUEVO PRODUCTO</title>
    </head>

    <body>

        <h1>
            Actualizar Producto
        </h1>

        <form action="<?php echo SERVERURL ?>/sql/crud/u-producto.php" method="POST" >

            <label>Id:  <?php echo $data['idproducto'] ?></label><br/>
            <input type="hidden" name="fid" id="fid" value="<?php echo $data['idproducto'] ?>" />
            <label for= "fcodigo">Codigo</label>
            <input type="text" name="fcodigo" id="fcodigo" placeholder="Ingrese Codigo" 
                   oninvalid="this.setCustomValidity('Rellene los campos. No sea Imbecil >:v')" 
                   value="<?php echo $data['codigo'] ?>" 
                   required /> <br/>

            <label for="freferencia">Referencia</label>
            <input type="text" name="freferencia" id="freferencia" placeholder="Referencia..." 
                   value="<?php echo $data['referencia'] ?>"
                   required /> <br/>

            <label for="ftipo">Tipo</label>
            <select name="ftipo" id="ftipo">

                <?php
                $query = "select * from tipo_prod";
                foreach ($conn->query($query) as $row) {
                    if ($row['idtipo'] == $data['idtipo']) {
                        echo '<option value=' . $row['idtipo'] . " selected> " . $row['nombre'] . "</option>";
                    } else {
                        echo '<option value=' . $row['idtipo'] . "> " . $row['nombre'] . "</option>";
                    }
                    ?>


                <?php } ?> 
            </select>
            <br />

            <label for="fnombre">Nombre</label>
            <input type="text" name="fnombre" id="fnombre" placeholder="Ingrese Nombre..." 
                   value="<?php echo $data['producto'] ?>"
                   required /><br/>

            <label for="fcantidad">Cantidad</label>
            <input type="number" name="fcantidad" id="fcantidad" min="1" pattern="^[0-9]+" 
                   value="<?php echo $data['stock'] ?>"
                   required /><br/>

            <label for="fprecio">Precio (S./)</label>
            <input type="number" name="fprecio" id="fprecio" min="0" value="12" 
                   value="<?php echo $data['precio'] ?>"
                   required /><br/>

            <label for="ffcreacion">Fecha Creacion</label>
            <input type="datetime-local" name="ffcreacion" id="ffcreacion" 
                   required  
                   value="<?php echo $data['fechacreacion'] ?>" readonly /><br/>

            <label for="festado">Habilitado</label>
            <input type="checkbox" name="festado" id="festado" <?php echo $data['estado'] ? "checked" : ""?>/><br/>

            <input type="submit" value="Registrar" />

        </form>

    </body>
</html>