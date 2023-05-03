<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGREGAR NUEVO PRODUCTO</title>

</head>
<body>

<h1>Agregar nuevo Producto \(:v)/</h1>
    <form action="insert-product.php" method="post">

<label for="fcodigo">Nombre Producto</label>
<input type="text" name="fcodigo" id="fcodigo" placeholder="Ingrese Codigo" /><br/>

<label for="freferencia">Referencia</label>
<input type="text" name="freferencia" id="freferencia" placeholder="Referencia..." /><br/>

<label for="ftipo">Tipo</label>
<select name="ftipo" id="ftipo">
<option value="1">Mouse</option>
<option value="2">Teclado</option>
<option value="3">Monitor</option>
<option value="4">Estabilizador</option>
</select><br />

<label for="fnombre">Nombre</label>
<input type="text" name="fnombre" id="fnombre" placeholder="Ingrese Nombre..."/><br/>

<label for="fprecio">Cantidad</label>
<input type="number" name="fprecio" id="fprecio" min="0" value="12"/><br/>

<label for="ffcreacion">Tipo</label>
<input type="date" name="ffcreacion" id="ffcreacion" /><br/>

<label for="ffingreso">Tipo</label>
<input type="date" name="ffingreso" id="ffingreso" /> <br/>

<label for="ffactulizacion">Tipo</label>
<input type="date" name="ffactulizacion" id="ffactulizacion" /><br/>

<label for="festado">Tipo</label>
<input type="checkbox" name="festado" id="festado" /><br/>

<input type="submit" value="Registrar" />

</form>
</body>
</html>