<!DOCTYPE html>
<html lang="it">

<head>
    <?php include '../head.php' ?>
    <title>Viaggiare sicuri - Discover Veneto</title>
</head>

<body>
<?php $pagina = viaggiare; ?>

<?php include '../navbar.php' ?>

<!-- ========= CONTAINER ======== -->
<div class="container">
    <!-- breadcrumbs -->
    <ol class="breadcrumb">
        <li><a href="../index.php">Home</a>
        </li>
        <!-- pagina attiva-->
        <li class="active">Viaggiare Sicuri</li>
    </ol>
</div>
<!-- /breadcrumbs -->

<div class="container">
    <div class="page-header">
        <h1>Viaggiare sicuri
            <small> Non rovinarti la vacanza!</small>
        </h1>
    </div>

    <div class="container">
        <a href="comefare.php"><h2 class="text-center">Come fare se..</h2>
            <img src="/img/comefare.jpg" class="img-responsive img-center hidden-print" alt="Come fare se"></a>

        <p class="text-center">Guida rapida su come affrontare gli imprevisti nel viaggio.</p>

        <a href="utili.php"><h2 class="text-center">Numeri utili</h2>
            <img src="/img/utili.gif" class="img-responsive img-center hidden-print" alt="Numeir utili">
        </a>

        <p class="text-center">Tutti i numeri utili per viaggiare in sicurezza.</p>

    </div>
</div>
<!-- ========= ./CONTAINER ======== -->


<?php include '../footer.php' ?>

</body>

</html>