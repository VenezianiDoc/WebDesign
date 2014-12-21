<!DOCTYPE html>
<html lang="it">

<head>
    <?php include '../head.php' ?>
    <title>Carrello - Discover Veneto</title>
</head>

<body>

    <?php include '../navbar.php' ?>

    <!-- ========= CONTAINER ======== -->
    <div class="container">
        <!-- breadcrumbs -->
        <ol class="breadcrumb">
            <li><a href="../index.php">Home</a>
            </li>
            <!-- pagina attiva-->
            <li class="active">Carrello</li>
        </ol>
    </div>
    <!-- /breadcrumbs -->
    <div class="container">
        <div class="page-header">
            <h1><i class="fa fa-shopping-cart"></i> Carrello
            <small> Il tuo carrello</small>
        </h1>
        </div>

        <div class="container">
            
            <?php include 'cart.php' ?>


        </div>
    </div>
    <!-- ========= ./CONTAINER ======== -->


    <?php include '../footer.php' ?>

</body>

</html>