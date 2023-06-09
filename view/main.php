     <div class="contenedor-general">
          <div class="seccion-panel">
            <div class="content-panel-cards">
              <div class="info-card rojo">
                Ventas
                <p class="icon-card">
                  <i class="fa-solid fa-basket-shopping"></i>
                </p>
                <p class="info-numero">0</p>
              </div>
              <div class="info-card verde">
                Productos Activos
                <p class="icon-card">
                  <i class="fa-solid fa-boxes-stacked"></i>
                </p>
                <p class="info-numero">

                <?php
                $query = "SELECT count(*) AS cantidad  FROM PRODUCTO WHERE estado='1' ";
                $result = $conn->query($query);
                foreach($conn->query($query) as $row){
                    echo $row['cantidad'];
                }
                ?>

</p>
              </div>
              <div class="info-card azul">
                Operaciones
                <p class="icon-card">
                  <i class="fa-solid fa-boxes-stacked"></i>
                </p>
                <p class="info-numero">6</p>
              </div>
              <div class="info-card amarillo">
                Cuadro
                <p class="icon-card">
                  <i class="fa-solid fa-boxes-packing"></i>
                </p>
                <p class="info-numero">12</p>
              </div>
            </div>
          </div>

          <div class="seccion-reportes">
            <div class="pre-section-panel">
              <div class="seccion-panel">
                <div class="section-titulo">
                  Ultimas Ventas
                </div>
                <table class="tabla-info">
                  <tr>
                    <th>Id</th>
                    <th>Producto</th>
                    <th>Fecha</th>
                    <th>Monto</th>
                  </tr>

                  <tr>
                    <td>1</td>
                    <td>Teclado Mecanico</td>
                    <td>23/03/1997</td>
                    <td>S./ 150.00</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Cargador</td>
                    <td>23/03/1997</td>
                    <td>S./ 15.00</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Utencilios</td>
                    <td>23/03/1997</td>
                    <td>S./ 10.00</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Teclado Mecanico</td>
                    <td>23/03/1997</td>
                    <td>S./ 150.00</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Cargador</td>
                    <td>23/03/1997</td>
                    <td>S./ 15.00</td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="pre-section-panel">
              <div class="seccion-panel">
                <div class="section-titulo">
                  Producto más vendido canvas
                </div>
                <div>
                  <canvas id="MiGrafica" width="400" height="300"> </canvas>
                </div>
                <script>
                  let miCanvas = document
                    .getElementById("MiGrafica")
                    .getContext("2d");

                  var dataFirst = {
                    label: "Car A - Speed (mph)",
                    data: [0, 59, 75, 20, 20, 55, 40],
                    lineTension: 0,
                    fill: false,
                    borderColor: "red"
                  };

                  var dataSecond = {
                    label: "Car B - Speed (mph)",
                    data: [20, 15, 60, 60, 65, 30, 70],
                    lineTension: 0,
                    fill: false,
                    borderColor: "blue"
                  };

                  var speedData = {
                    labels: ["0s", "10s", "20s", "30s", "40s", "50s", "60s"],
                    datasets: [dataFirst, dataSecond]
                  };

                  var chartOptions = {
                    legend: {
                      display: true,
                      position: "top",
                      labels: {
                        boxWidth: 80,
                        fontColor: "black"
                      }
                    }
                  };

                  var lineChart = new Chart("MiGrafica", {
                    type: "line",
                    data: speedData,
                    options: chartOptions
                  });
                </script>
              </div>
            </div>

            <div class="pre-section-panel">
              <div class="seccion-panel">
                <div class="section-titulo">
                  Cargos
                </div>
                <table class="tabla-info">
                  <tr>
                    <th>Id</th>
                    <th>Cargo</th>
                    <th>Descripcion</th>
                    <th>Estado</th>
                  </tr>
                  <?php 
$query = "select * from cargo";
foreach($conn->query($query) as $row){
  ?>
  <tr> 
    <td><?php echo $row['idcargo'] ?> </td> 
    <td><?php echo $row['nombre'] ?> </td> 
    <td><?php echo $row['descripcion'] ?> </td> 
    <td><?php echo $row['estado'] ?> </td> 
</tr>
<?php } ?>
                


                </table>
              </div>
            </div>

            <div class="pre-section-panel">
              <div class="seccion-panel">
                <div class="section-titulo">
                  Tipo de Productos Registrados
                </div>
                <table class="tabla-info">
                <tr> 
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Descripcion</th>
                  <th>Estado</th>
                </tr>
                <?php 
$query = "select * from tipo_prod";
foreach($conn->query($query) as $row){
  ?>
  <tr> 
    <td><?php echo $row['idtipo'] ?> </td> 
    <td><?php echo $row['nombre'] ?> </td> 
    <td><?php echo $row['descripcion'] ?> </td> 
    <td><?php echo $row['estado'] ?> </td> 
</tr>
<?php } ?>
                </table>
              </div>
            </div>
          </div>

          
        </div>