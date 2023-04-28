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
        $query = "SELECT * FROM PRODUCTO";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                   <tr>
                        <td><?php echo $row['IDPRODUCTO']?> </td>
                        <td><i class="fa-solid fa-check"></i>
                        <?php echo $row['ESTADO']?></td>
                        <td><?php echo $row['PRODUCTO']?></td>
                        <td><?php echo $row['CODIGO']?></td>
                        <td><?php echo $row['REFERENCIA']?></td>
                        <td><?php echo $row['IDTIPO']?></td>
                        <td><?php echo $row['STOCK']?></td>
                        <td>S/. <?php echo $row['PRECIO']?></td>
                        <td><?php echo $row['FECHACREACION']?></td>
                        <td><?php echo $row['FECHAINGRESO']?></td>
                        <td><?php echo $row['FECHAACTUALIZACION']?></td>
                        <td>
                            
                            <div class="button update" type="button" > Actualizar</div>
                            <div class="button delete" type="button" > Eliminar</div>
                        </td>
                    </tr>
                <?php
            }
        }
        ?>
                   
                    <tr>
                        <td>2</td>
                        <td><i class="fa-solid fa-xmark"></i></td>
                        <td>Prod001</td>
                        <td>SN01SAS2S</td>
                        <td>Audifonos</td>
                        <td>Audofonos Logitech G502</td>
                        <td>15</td>
                        <td>S/. 150.00</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>
                            <input type="button" value="Actualizar" />
                            <input type="button" value="Borrar" />
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Activado</td>
                        <td>Prod001</td>
                        <td>SN01SAS2S</td>
                        <td>Audifonos</td>
                        <td>Audofonos Logitech G502</td>
                        <td>15</td>
                        <td>S/. 150.00</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>
                            <input type="button" value="Actualizar" />
                            <input type="button" value="Borrar" />
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Activado</td>
                        <td>Prod001</td>
                        <td>SN01SAS2S</td>
                        <td>Audifonos</td>
                        <td>Audofonos Logitech G502</td>
                        <td>15</td>
                        <td>S/. 150.00</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>
                            <input type="button" value="Actualizar" />
                            <input type="button" value="Borrar" />
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Activado</td>
                        <td>Prod001</td>
                        <td>SN01SAS2S</td>
                        <td>Audifonos</td>
                        <td>Audofonos Logitech G502</td>
                        <td>15</td>
                        <td>S/. 150.00</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>
                            <input type="button" value="Actualizar" />
                            <input type="button" value="Borrar" />
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Activado</td>
                        <td>Prod001</td>
                        <td>SN01SAS2S</td>
                        <td>Audifonos</td>
                        <td>Audofonos Logitech G502</td>
                        <td>15</td>
                        <td>S/. 150.00</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>
                            <input type="button" value="Actualizar" />
                            <input type="button" value="Borrar" />
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Activado</td>
                        <td>Prod001</td>
                        <td>SN01SAS2S</td>
                        <td>Audifonos</td>
                        <td>Audofonos Logitech G502</td>
                        <td>15</td>
                        <td>S/. 150.00</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>
                            <input type="button" value="Actualizar" />
                            <input type="button" value="Borrar" />
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Activado</td>
                        <td>Prod001</td>
                        <td>SN01SAS2S</td>
                        <td>Audifonos</td>
                        <td>Audofonos Logitech G502</td>
                        <td>15</td>
                        <td>S/. 150.00</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>
                            <input type="button" value="Actualizar" />
                            <input type="button" value="Borrar" />
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Activado</td>
                        <td>Prod001</td>
                        <td>SN01SAS2S</td>
                        <td>Audifonos</td>
                        <td>Audofonos Logitech G502</td>
                        <td>15</td>
                        <td>S/. 150.00</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>
                            <input type="button" value="Actualizar" />
                            <input type="button" value="Borrar" />
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Activado</td>
                        <td>Prod001</td>
                        <td>SN01SAS2S</td>
                        <td>Audifonos</td>
                        <td>Audofonos Logitech G502</td>
                        <td>15</td>
                        <td>S/. 150.00</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>
                            <input type="button" value="Actualizar" />
                            <input type="button" value="Borrar" />
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Activado</td>
                        <td>Prod001</td>
                        <td>SN01SAS2S</td>
                        <td>Audifonos</td>
                        <td>Audofonos Logitech G502</td>
                        <td>15</td>
                        <td>S/. 150.00</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>
                            <input type="button" value="Actualizar" />
                            <input type="button" value="Borrar" />
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Activado</td>
                        <td>Prod001</td>
                        <td>SN01SAS2S</td>
                        <td>Audifonos</td>
                        <td>Audofonos Logitech G502</td>
                        <td>15</td>
                        <td>S/. 150.00</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>
                            <input type="button" value="Actualizar" />
                            <input type="button" value="Borrar" />
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Activado</td>
                        <td>Prod001</td>
                        <td>SN01SAS2S</td>
                        <td>Audifonos</td>
                        <td>Audofonos Logitech G502</td>
                        <td>15</td>
                        <td>S/. 150.00</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>
                            <input type="button" value="Actualizar" />
                            <input type="button" value="Borrar" />
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Activado</td>
                        <td>Prod001</td>
                        <td>SN01SAS2S</td>
                        <td>Audifonos</td>
                        <td>Audofonos Logitech G502</td>
                        <td>15</td>
                        <td>S/. 150.00</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>
                            <input type="button" value="Actualizar" />
                            <input type="button" value="Borrar" />
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Activado</td>
                        <td>Prod001</td>
                        <td>SN01SAS2S</td>
                        <td>Audifonos</td>
                        <td>Audofonos Logitech G502</td>
                        <td>15</td>
                        <td>S/. 150.00</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>
                            <input type="button" value="Actualizar" />
                            <input type="button" value="Borrar" />
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Activado</td>
                        <td>Prod001</td>
                        <td>SN01SAS2S</td>
                        <td>Audifonos</td>
                        <td>Audofonos Logitech G502</td>
                        <td>15</td>
                        <td>S/. 150.00</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>
                            <input type="button" value="Actualizar" />
                            <input type="button" value="Borrar" />
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Activado</td>
                        <td>Prod001</td>
                        <td>SN01SAS2S</td>
                        <td>Audifonos</td>
                        <td>Audofonos Logitech G502</td>
                        <td>15</td>
                        <td>S/. 150.00</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>
                            <input type="button" value="Actualizar" />
                            <input type="button" value="Borrar" />
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Activado</td>
                        <td>Prod001</td>
                        <td>SN01SAS2S</td>
                        <td>Audifonos</td>
                        <td>Audofonos Logitech G502</td>
                        <td>15</td>
                        <td>S/. 150.00</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>
                            <input type="button" value="Actualizar" />
                            <input type="button" value="Borrar" />
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Activado</td>
                        <td>Prod001</td>
                        <td>SN01SAS2S</td>
                        <td>Audifonos</td>
                        <td>Audofonos Logitech G502</td>
                        <td>15</td>
                        <td>S/. 150.00</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>
                            <input type="button" value="Actualizar" />
                            <input type="button" value="Borrar" />
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Activado</td>
                        <td>Prod001</td>
                        <td>SN01SAS2S</td>
                        <td>Audifonos</td>
                        <td>Audofonos Logitech G502</td>
                        <td>15</td>
                        <td>S/. 150.00</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>
                            <input type="button" value="Actualizar" />
                            <input type="button" value="Borrar" />
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Activado</td>
                        <td>Prod001</td>
                        <td>SN01SAS2S</td>
                        <td>Audifonos</td>
                        <td>Audofonos Logitech G502</td>
                        <td>15</td>
                        <td>S/. 150.00</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>
                            <input type="button" value="Actualizar" />
                            <input type="button" value="Borrar" />
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Activado</td>
                        <td>Prod001</td>
                        <td>SN01SAS2S</td>
                        <td>Audifonos</td>
                        <td>Audofonos Logitech G502</td>
                        <td>15</td>
                        <td>S/. 150.00</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>
                            <input type="button" value="Actualizar" />
                            <input type="button" value="Borrar" />
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Activado</td>
                        <td>Prod001</td>
                        <td>SN01SAS2S</td>
                        <td>Audifonos</td>
                        <td>Audofonos Logitech G502</td>
                        <td>15</td>
                        <td>S/. 150.00</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>
                            <input type="button" value="Actualizar" />
                            <input type="button" value="Borrar" />
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Activado</td>
                        <td>Prod001</td>
                        <td>SN01SAS2S</td>
                        <td>Audifonos</td>
                        <td>Audofonos Logitech G502</td>
                        <td>15</td>
                        <td>S/. 150.00</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>
                            <input type="button" value="Actualizar" />
                            <input type="button" value="Borrar" />
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Activado</td>
                        <td>Prod001</td>
                        <td>SN01SAS2S</td>
                        <td>Audifonos</td>
                        <td>Audofonos Logitech G502</td>
                        <td>15</td>
                        <td>S/. 150.00</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>
                            <input type="button" value="Actualizar" />
                            <input type="button" value="Borrar" />
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Activado</td>
                        <td>Prod001</td>
                        <td>SN01SAS2S</td>
                        <td>Audifonos</td>
                        <td>Audofonos Logitech G502</td>
                        <td>15</td>
                        <td>S/. 150.00</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>
                            <input type="button" value="Actualizar" />
                            <input type="button" value="Borrar" />
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Activado</td>
                        <td>Prod001</td>
                        <td>SN01SAS2S</td>
                        <td>Audifonos</td>
                        <td>Audofonos Logitech G502</td>
                        <td>15</td>
                        <td>S/. 150.00</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>
                            <input type="button" value="Actualizar" />
                            <input type="button" value="Borrar" />
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Activado</td>
                        <td>Prod001</td>
                        <td>SN01SAS2S</td>
                        <td>Audifonos</td>
                        <td>Audofonos Logitech G502</td>
                        <td>15</td>
                        <td>S/. 150.00</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>
                            <input type="button" value="Actualizar" />
                            <input type="button" value="Borrar" />
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Activado</td>
                        <td>Prod001</td>
                        <td>SN01SAS2S</td>
                        <td>Audifonos</td>
                        <td>Audofonos Logitech G502</td>
                        <td>15</td>
                        <td>S/. 150.00</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>
                            <input type="button" value="Actualizar" />
                            <input type="button" value="Borrar" />
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Activado</td>
                        <td>Prod001</td>
                        <td>SN01SAS2S</td>
                        <td>Audifonos</td>
                        <td>Audofonos Logitech G502</td>
                        <td>15</td>
                        <td>S/. 150.00</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>23/03/1997 15:30:15</td>
                        <td>
                            <input type="button" value="Actualizar" />
                            <input type="button" value="Borrar" />
                        </td>
                    </tr>
                </table>
                Cantidad total : 15
            </div>
        </div>

    </div>
</div>