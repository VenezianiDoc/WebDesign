<!DOCTYPE html>
<html lang="it">

<head>
    <?php include "../../headterzliv.php" ?>
    <title>Articolo - Discover Veneto</title>
</head>

<body>

<?php include "../../navbarterzliv.php" ?>

<!-- ========= CONTAINER ======== -->
<div class="container">
    <!-- breadcrumbs -->
    <ol class="breadcrumb">
        <li><a href="/index.php">Home</a>
        </li>
        <li><a href="/destinazioni/">Destinazioni</a>
        </li>
        <li><a href="./index.php">Musei</a>
        </li>
        <!-- pagina attiva-->
        <li class="active">Articolo</li>
    </ol>
</div>
<!-- /breadcrumbs -->
<div class="container">
    <div class="page-header">
        <h1>Punta della Dogana
        </h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-2 hidden-print">
                <?php include '../navbarorizzontal.php' ?>
            </div>
            <div class="col-xs-12 col-sm-10">

                <div class="well">
                    <div class="media">

                        <div class="media-body">
                            <h4>Punta della Dogana</h4>

                            <p class="text-right">Venezia</p>

                            <p>Con la sua forma perfettamente triangolare, Punta della Dogana divide il Canal Grande dal
                                Canale della Giudecca. L'ex porto monumentale della città ospita mostre di opere dalla
                                collezione di François Pinault dopo un importante progetto di riqualifica voluto dalla
                                François Pinault Foundation. L'edificio, così particolare e caratterizzante, cambia così
                                funzione per la prima volta nella sua storia, abbandonando i traffici commerciali e
                                diventando bocca di porto per le vette più rappresentative della produzione artistica
                                contemporanea e luogo d'elezione per condividerla con il pubblico più ampio.</p>

                            <p>Biglietto valido per un ingresso fino al 12 febbraio.</p>

                            <p class="text-right strong">12,00 €</p>
                            <ul class="list-inline list-unstyled">
                                <li><span><i class="glyphicon glyphicon-calendar"></i> fino al 12 febbraio</span></li>
                                <li>|</li>
                                <span><i class="glyphicon glyphicon-comment"></i> 2 commenti</span>
                                <li>|</li>
                                <li>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </li>
                                <li>|</li>
                                <li>
                                    <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
                                    <span><i class="fa fa-facebook-square"></i></span>
                                    <span><i class="fa fa-twitter-square"></i></span>
                                    <span><i class="fa fa-google-plus-square"></i></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <br>

                    <div class="text-center">
                        <div class="btn-group cart">
                            <button type="button" class="btn btn-success">
                                Aggiungi al carrello
                            </button>
                        </div><div class="col-md-1"></div>
                        <div class="btn-group wishlist">
                            <button type="button" class="btn btn-danger" <?php if (!isset($_SESSION['username'])) { echo 'onclick="myFunction()"'; } else { echo ''; } ?> >
                                <span id="warning">Aggiungi a Lista desideri</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ========= ./CONTAINER ======== -->


<?php include '../../footerterzliv.php' ?>

</body>

</html>