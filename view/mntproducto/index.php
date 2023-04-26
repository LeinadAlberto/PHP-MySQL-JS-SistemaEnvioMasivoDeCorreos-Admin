<?php 

    require_once("../../config/conexion.php");

    if (isset($_SESSION["usu_id"])) {


?>

<!doctype html>
<html lang="es">
    <head>
        <?php require_once("../html/MainHead.php"); ?> 
        <title>Mantenimiento Producto</title>
    </head>

    <body>

        <!-- Start Sidemenu Area -->
        <?php require_once("../html/MainMenu.php"); ?>
        <!-- End Sidemenu Area -->

        <!-- Start Main Content Wrapper Area -->
        <div class="main-content d-flex flex-column">

            <!-- Top Navbar Area -->
            <?php require_once("../html/MainNavbar.php"); ?>
            <!-- End Top Navbar Area -->
            
            <!-- Breadcrumb Area -->
            <div class="breadcrumb-area">
                <h1>Mnt Producto</h1>

                <ol class="breadcrumb">
                    <li class="item"><a href="../home/"><i class='bx bx-home-alt'></i></a></li>

                    <li class="item">Mantenimiento de Producto</li>

                    <!-- <li class="item">Blank Page</li> -->
                </ol>
            </div>
            <!-- End Breadcrumb Area -->

            <div class="flex-grow-1"></div>

            <!-- Start Footer End -->
            <?php require_once("../html/MainFooter.php"); ?>
            <!-- End Footer End -->

        </div>
        <!-- End Main Content Wrapper Area -->
        
        <?php require_once("../html/MainJs.php"); ?>
        
        <script src="mntproducto.js"></script>
    </body>
</html>

<?php 

    } else {
        header("Location: " . Conectar::ruta());
    }
?>