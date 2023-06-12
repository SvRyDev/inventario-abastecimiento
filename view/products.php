<div class="contenedor-general">
    <div class="seccion-panel">
        Buscar
        <input type="text" />
        Ordenar por:
        <select name="" id="">
            <option value="">Marca</option>
            <option value="">Categoria</option>
            <option value="">Stock</option>
            <option value=""></option>
            <option value=""></option>
        </select>
        <label for="abrirVentana">
            + Nuevo Producto
        </label>
    </div>
    <div class="seccion-reportes">

        <!--  
            <div class="pre-section-panel">
          <div class="seccion-panel ">
              <div class="section-titulo">
                Categorias : 3
                <input type="button" value="* Editar">
              </div>
              <div class="contenedor-tabla">
                <table class="tabla-info ">
                  <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                  </tr>
                  <tr>
                    <td>01</td>
                    <td>Mouse</td>
                  </tr>
                  <tr>
                    <td>02</td>
                    <td>Teclado</td>
                    </td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>Audifonos Inalambricos</td>
                  </tr>
                  <tr>
                    <td>04</td>
                    <td>Cargadores</td>
                    
                  </tr>
       
                </table>
              </div>
            </div>
      </div>
        -->



        <div class="seccion-panel ">
            <div class="section-titulo">
                Productos
            </div>
            <div class="contenedor-tabla">
                <table class="tabla-info pag-producto">
                    <tr>
                        <th>Id</th>
                        <th>Estado</th>
                        <th>Codigo</th>
                        <th>Referencia</th>
                        <th>Tipo</th>
                        <th>Nombre</th>
                        <th>Stock</th>
                        <th>Precio</th>
                        <th>Fecha Creacion</th>
                        <th>Fecha Renovacion</th>
                        <th>Ultima Actualizacion</th>
                        <th>Operacion</th>
                    </tr>
        <?php
        $query = "SELECT p.*, t.nombre as nombre_tipop FROM PRODUCTO p, tipo_prod t WHERE p.idtipo = t.idtipo ORDER BY idproducto ASC";
        foreach($conn->query($query) as $row){
                ?>
                   <tr>
                        <td><?php echo $row['idproducto']?> </td>
                        <td>
                        <?php echo $row['estado'] ? '<i class="fa-solid fa-check"></i>' : '<i class="fa-solid fa-xmark"></i>'    ?></td>
                        <td><?php echo $row['codigo']?></td>
                        <td><?php echo $row['referencia']?></td>
                        <td><?php echo $row['nombre_tipop']?></td>
                        <td><?php echo $row['producto']?></td>
                        <td><?php echo $row['stock']?></td>
                        <td>S/. <?php echo $row['precio']?></td>
                        <td><?php echo $row['fechacreacion']?></td>
                        <td><?php echo $row['fechaingreso']?></td>
                        <td><?php echo $row['fechaactualizacion']?></td>
                        <td>
                            
                            <a class="button-a" href="<?php echo SERVERURL . "u-producto.php?id=". $row['idproducto'] ?>" >Actualizar</a>
                            <a class="button-a" href="<?php echo SERVERURL . "d-producto.php?id=". $row['idproducto'] ?>" >Eliminar</a>
                        </td>
                    </tr>
                <?php
            }
        
        ?>
                   

                </table>
                Cantidad total :

                <?php 
                $query = "SELECT count(*) AS cantidad  FROM PRODUCTO ";
                $result = $conn->query($query);
        
                foreach($conn->query($query) as $row){
                    echo $row['cantidad'];
                }
                ?>
            </div>
        </div>

    </div>
</div>