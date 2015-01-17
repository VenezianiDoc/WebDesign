<!DOCTYPE html>
<html lang="it">

<head>
    <?php
    include '../head.php'
    ?>
    <title>Mappa del sito - Discover Veneto</title>
</head>

<body>

<?php
include '../navbar.php'
?>

<!-- ========= CONTAINER ======== -->
<div class="container">
    <!-- breadcrumbs -->
    <ol class="breadcrumb">
        <li><a href="../index.php">Home</a>
        </li>
        <!-- pagina attiva-->
        <li class="active">Mappa del sito</li>
    </ol>
</div>
<!-- /breadcrumbs -->
<div class="container">
    <div class="page-header">
        <h1><i class="fa fa-sitemap"></i> Mappa del sito
            <small> Per non perdersi all'interno del sito</small>
        </h1>
    </div>

    <div class="container">
        <ul>
            <li>
                <a href="/index.php">Home</a>
            </li>
            <ul>
                <li>
                    <a href="/categorie/index.php">Categorie</a>
                </li>
                <ul>
                    <li>
                        <a href="/categorie/arte">Arte</a>
                    </li>
                    <li>
                        <a href="/categorie/avventura">Avventura</a>
                    </li>
                    <li>
                        <a href="/categorie/business">Business</a>
                    </li>
                    <li>
                        <a href="/categorie/famiglia">Famiglia</a>
                    </li>
                    <li>
                        <a href="/categorie/relax">Relax</a>
                    </li>
                    <li>
                        <a href="/categorie/studenti">Studenti</a>
                    </li>
                </ul>
                <li>
                    <a href="/destinazioni/index.php">Destinazioni</a>
                </li>
                <ul>
                    <li>
                        <a href="/destinazioni/alberghi">Alberghi</a>
                    </li>
                    <li>
                        <a href="/destinazioni/locali">Locali</a>
                    </li>
                    <li>
                        <a href="/destinazioni/mostre">Mostre</a>
                    </li>
                    <li>
                        <a href="/destinazioni/musei">Musei</a>
                    </li>
                </ul>
                <li>
                    <a href="/mappa/">Mappa del sito</a>
                </li>
                <li>
                    <a href="/offerte/offerte">Offerte</a>
                </li>
                <ul>
                    <li>
                        <a href="/offerte/bassa.php">Bassa stagione</a>
                    </li>
                    <li>
                        <a href="/offerte/lastminute.php">Ultimo minuto</a>
                    </li>
                </ul>
                <li>
                    <a href="/servizi">Servizi</a>
                </li>
                <ul>
                    <li>
                        <a href="/servizi/about.php">About us</a>
                    </li>
                    <li>
                        <a href="/servizi/contatti.php">Contattaci</a>
                    </li>
                </ul>
                <li>
                    <a href="/viaggiaresicuri">Viaggiare sicuri</a>
                </li>
                <ul>
                    <li>
                        <a href="/viaggiaresicuri/comefare.php">Come fare</a>
                    </li>
                    <li>
                        <a href="/viaggiaresicuri/utili.php">Numeri utili</a>
                    </li>
                </ul>
            </ul>
        </ul>
    </div>
    <!-- ========= ./CONTAINER ======== -->


    <?php
    include '../footer.php'
    ?>
</div>
</body>

</html>