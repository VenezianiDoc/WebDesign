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
                <a href="/venezianidoc/index.phpdoc/index.php">Home</a>
            </li>
            <ul>
                <li>
                    <a href="/venezianidoc/categorie/index.php">Categorie</a>
                </li>
                <ul>
                    <li>
                        <a href="/venezianidoc/categorie/arte">Arte</a>
                    </li>
                    <li>
                        <a href="/venezianidoc/categorie/avventura">Avventura</a>
                    </li>
                    <li>
                        <a href="/venezianidoc/categorie/business">Business</a>
                    </li>
                    <li>
                        <a href="/venezianidoc/categorie/famiglia">Famiglia</a>
                    </li>
                    <li>
                        <a href="/venezianidoc/categorie/relax">Relax</a>
                    </li>
                    <li>
                        <a href="/venezianidoc/categorie/studenti">Studenti</a>
                    </li>
                </ul>
                <li>
                    <a href="/venezianidoc/destinazioni/index.php">Destinazioni</a>
                </li>
                <ul>
                    <li>
                        <a href="/venezianidoc/destinazioni/alberghi">Alberghi</a>
                    </li>
                    <li>
                        <a href="/venezianidoc/destinazioni/locali">Locali</a>
                    </li>
                    <li>
                        <a href="/venezianidoc/destinazioni/mostre">Mostre</a>
                    </li>
                    <li>
                        <a href="/venezianidoc/destinazioni/musei">Musei</a>
                    </li>
                </ul>
                <li>
                    <a href="/venezianidoc/mappa/">Mappa del sito</a>
                </li>
                <li>
                    <a href="/venezianidoc/offertenidoc/offerte">Offerte</a>
                </li>
                <ul>
                    <li>
                        <a href="/venezianidoc/offertenidoc/offerte/bassa.php">Bassa stagione</a>
                    </li>
                    <li>
                        <a href="/venezianidoc/offertenidoc/offerte/lastminute.php">Ultimo minuto</a>
                    </li>
                </ul>
                <li>
                    <a href="/venezianidoc/servizinidoc/servizi">Servizi</a>
                </li>
                <ul>
                    <li>
                        <a href="/venezianidoc/servizinidoc/servizi/about.php">About us</a>
                    </li>
                    <li>
                        <a href="/venezianidoc/servizinidoc/servizi/contatti.php">Contattaci</a>
                    </li>
                </ul>
                <li>
                    <a href="/venezianidoc/viaggiaresicuriaggiaresicuri">Viaggiare sicuri</a>
                </li>
                <ul>
                    <li>
                        <a href="/venezianidoc/viaggiaresicuriaggiaresicuri/comefare.php">Come fare</a>
                    </li>
                    <li>
                        <a href="/venezianidoc/viaggiaresicuriaggiaresicuri/utili.php">Numeri utili</a>
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