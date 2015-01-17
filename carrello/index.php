<!DOCTYPE html>
<html lang="it">

<head>
    <?php include '../head.php' ?>
    <title>Carrello - Discover Veneto</title>
</head>

<body>
    <?php $pagina='cart'; ?>

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

<?php $TIPO = $_POST['TIPO']; ?>

<div class="container">
    <div class="page-header">
        <h1><i class="fa fa-shopping-cart"></i> Carrello
            <small> Il tuo carrello</small>
        </h1>
    </div>

</div>

<!-- PATH CART -->
<div class="container">


    <div class="row bs-wizard hidden-print" style="border-bottom:0;">

        <div class="col-xs-3 bs-wizard-step <?php if ($TIPO == 0) {
            echo ' active ';
        } elseif ($TIPO > 0) {
            echo ' complete ';
        } ?>">
            <div class="text-center bs-wizard-stepnum">Carrello</div>
            <div class="progress">
                <div class="progress-bar"></div>
            </div>
            <p class="bs-wizard-dot"></p>

            <div class="bs-wizard-info text-center">I tuoi articoli</div>
        </div>

        <div class="col-xs-3 bs-wizard-step <?php if ($TIPO == 1) {
            echo ' active ';
        } elseif ($TIPO > 1) {
            echo ' complete ';
        } elseif ($TIPO < 1) {
            echo ' disabled ';
        } ?>"><!-- complete -->
            <div class="text-center bs-wizard-stepnum">Check</div>
            <div class="progress">
                <div class="progress-bar"></div>
            </div>
            <p class="bs-wizard-dot"></p>

            <div class="bs-wizard-info text-center">Controlla le quantit&agrave;</div>
        </div>

        <div class="col-xs-3 bs-wizard-step <?php if ($TIPO == 2) {
            echo ' active ';
        } elseif ($TIPO > 2) {
            echo ' complete ';
        } elseif ($TIPO < 2) {
            echo ' disabled ';
        } ?>"><!-- complete -->
            <div class="text-center bs-wizard-stepnum">Cassa</div>
            <div class="progress">
                <div class="progress-bar"></div>
            </div>
            <p class="bs-wizard-dot"></p>

            <div class="bs-wizard-info text-center">Metodo di pagamento</div>
        </div>

        <div class="col-xs-3 bs-wizard-step <?php if ($TIPO == 3) {
            echo ' active ';
        } elseif ($TIPO > 3) {
            echo ' complete ';
        } elseif ($TIPO < 3) {
            echo ' disabled ';
        } ?>"><!-- active -->
            <div class="text-center bs-wizard-stepnum">Conferma</div>
            <div class="progress">
                <div class="progress-bar"></div>
            </div>
            <p class="bs-wizard-dot"></p>

            <div class="bs-wizard-info text-center">Acquisto eseguito</div>
        </div>
    </div>
</div>

<!-- ./PATH CART -->


<div class="container">
    <div class="container">

        <!-- breadcrumbs avanzamento carrello
        <ol class="breadcrumb-cart text-center">
            <li <?php if ($TIPO >= 0) {
            echo ' class="active"';
        } ?>>Carrello</li>
            <li <?php if ($TIPO >= 1) {
            echo ' class="active"';
        } ?>>Check</li>
            <li <?php if ($TIPO >= 2) {
            echo ' class="active"';
        } ?>>Cassa</li>
            <li <?php if ($TIPO >= 3) {
            echo ' class="active"';
        } ?>>Conferma</li>
        </ol>
    </div>
 /breadcrumbs avanzamento carrello -->


        <!-- Simulatore carrello -->

        <?php $TIPO = $_POST['TIPO'];
        if ($TIPO == 1) {
            include 'cart_pieno.php';
        } elseif ($TIPO == 2) {
            include 'cart_cassa.php';
        } elseif ($TIPO == 3) {
            include 'cart_pagato.php';
        } else {
            include 'cart_vuoto.php';
        } ?>


    </div>
    <!-- ========= ./CONTAINER ======== -->


    <?php include '../footer.php' ?>

</body>

</html>