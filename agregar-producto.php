<!DOCTYPE html>
<html lang="en">

<?php 
include('config/serverUrl.php'); 
include('sql/connectDB.php');
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGREGAR NUEVO PRODUCTO</title>
</head>

<body>

    <h1>
        Agregar nuevo Producto <?php echo SERVERURL ?>
    </h1>

    <form action="<?php echo SERVERURL ?>/sql/crud/insert-product.php" method="POST" >

    <label for= "fcodigo">Codigo</label>
    <input type="text" name="fcodigo" id="fcodigo" placeholder="Ingrese Codigo" required /> <br/>

    <label for="freferencia">Referencia</label>
    <input type="text" name="freferencia" id="freferencia" placeholder="Referencia..." required /> <br/>

    <label for="ftipo">Tipo</label>
    <select name="ftipo" id="ftipo">

    <?php 
$query = "select * from tipo_prod";
foreach($conn->query($query) as $row){
  ?>
  <option value="<?php echo $row['idtipo'] ?>"> <?php echo $row['nombre'] ?>  </option>
    
<?php } ?> 
</select>
<br />

    <label for="fnombre">Nombre</label>
    <input type="text" name="fnombre" id="fnombre" placeholder="Ingrese Nombre..." required /><br/>

    <label for="fcantidad">Cantidad</label>
    <input type="number" name="fcantidad" id="fcantidad" min="1" required /><br/>

    <label for="fprecio">Precio (S./)</label>
    <input type="number" name="fprecio" id="fprecio" min="0" value="12" required /><br/>

    <label for="ffcreacion">Fecha</label>
    <input type="datetime-local" name="ffcreacion" id="ffcreacion" required  value="<?php echo date('d-m-Y') . ''. date('')?>"/><br/>

    <label for="festado">Tipo</label>
    <input type="checkbox" name="festado" id="festado"  /><br/>

    <input type="submit" value="Registrar" />

    </form>
</body>
</html>