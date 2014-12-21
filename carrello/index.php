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

            <!-- Simulatore carrello -->

            <?php $TIPO = $_POST['TIPO']; if($TIPO==1){include 'cart_pieno.php';} elseif($TIPO==2){include 'cart_cassa.php';} elseif($TIPO==3){include 'cart_pagato.php';} else{ include 'cart_vuoto.php';} ?>


        </div>
    </div>
    <!-- ========= ./CONTAINER ======== -->


    <?php include '../footer.php' ?>

</body>

</html>