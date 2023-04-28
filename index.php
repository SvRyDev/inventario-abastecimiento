<?php
include ("sql/connectDB.php");
include ("config/serverUrl.php");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <script
            src="https://kit.fontawesome.com/190eb22c46.js"
            crossorigin="anonymous"
        ></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="<?php echo SERVERURL ?>js/jquery-3.6.4.min.js"></script>
        <link rel="stylesheet" href="<?php echo SERVERURL ?>styles/style.css" />
        <link rel="stylesheet" href="<?php echo SERVERURL ?>styles/preloaderStyle.css" />
        <title>App - Serviart</title>
    </head>
    <body>

        <!-- PRELOADER --> 
        <?php
        include ("contents/preloader.php");
        ?>
        <script src="<?php echo SERVERURL ?>js/preloader.js"></script>
        <div class="contenedor-global">
            <!-- MENU -->
            <?php
            include ("contents/nav.php");
            ?>
            <!-- PRINCIPAL -->
            <div class="contenedor-principal">
                <!-- CABECERA -->
                <?php
                include ('contents/header.php');
                ?>

                <!-- VENTANA PRINCIPAL -->
                <?php
                // LOAD VIEWS
                if (isset($_GET['view'])) {
                    $view = explode("/", $_GET['view']);
                    if (is_file('view/' . $view[0] . '.php')) {
                        include 'view/' . $view[0] . '.php';
                    } else {
                        include 'view/main.php';
                    }
                } else {
                    include 'view/main.php';
                }
                ?>


            </div>
        </div>

       
    </body>
</html>
