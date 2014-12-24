<!DOCTYPE html>
<html lang="it">

<head>
    <?php include '../head.php' ?>
    <title>Bassa stagione - Discover Veneto</title>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

<?php include '../navbar.php' ?>

<!-- ========= CONTAINER ======== -->
<div class="container">
    <!-- breadcrumbs -->
    <ol class="breadcrumb">
        <li>
            <a href="../index.php">Home</a>
        </li>
        <li>
            <a href="index.php">Offerte</a>
        </li>
        <!-- pagina attiva-->
        <li class="active">Bassa stagione</li>
    </ol>
</div>
<!-- /breadcrumbs -->
<div class="container">
    <div class="page-header">
        <h1>Bassa stagione
            <small> I migliori prezzi di sempre!</small>
        </h1>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <!-- PRICE ITEM -->
                <div class="panel price panel-red">
                    <div class="panel-heading  text-center">
                        <h3>NOTTE A VENZIA</h3>
                    </div>
                    <div class="panel-body text-center">
                        <p class="lead" style="font-size:40px"><strong>129 €</strong></p>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> 1 Notte</li>
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> Camera doppia</li>
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> Hotel 5 stelle</li>
                    </ul>
                    <div class="panel-footer">
                        <a class="btn btn-lg btn-block btn-danger" href="#">Compra ora!</a>
                    </div>
                </div>
                <!-- /PRICE ITEM -->
            </div>

            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <!-- PRICE ITEM -->
                <div class="panel price panel-blue">
                    <div class="panel-heading arrow_box text-center">
                        <h3>ABANO TERME</h3>
                    </div>
                    <div class="panel-body text-center">
                        <p class="lead" style="font-size:40px"><strong>79 €</strong></p>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item"><i class="icon-ok text-info"></i> SPA per 2 persone</li>
                        <li class="list-group-item"><i class="icon-ok text-info"></i> Massaggi inclusi</li>
                        <li class="list-group-item"><i class="icon-ok text-info"></i> 5 stelle</li>
                    </ul>
                    <div class="panel-footer">
                        <a class="btn btn-lg btn-block btn-info" href="#">Compra ora!</a>
                    </div>
                </div>
                <!-- /PRICE ITEM -->
            </div>

            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <!-- PRICE ITEM -->
                <div class="panel price panel-green">
                    <div class="panel-heading arrow_box text-center">
                        <h3>NOTTE IN RIFUGIO</h3>
                    </div>
                    <div class="panel-body text-center">
                        <p class="lead" style="font-size:40px"><strong>39 €</strong></p>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item"><i class="icon-ok text-success"></i> Parco Naturale Dolomiti</li>
                        <li class="list-group-item"><i class="icon-ok text-success"></i> Assicurazione CAI</li>
                        <li class="list-group-item"><i class="icon-ok text-success"></i> Mezza pensione</li>
                    </ul>
                    <div class="panel-footer">
                        <a class="btn btn-lg btn-block btn-success" href="#">Compra ora!</a>
                    </div>
                </div>
                <!-- /PRICE ITEM -->
            </div>

            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <!-- PRICE ITEM -->
                <div class="panel price panel-grey">
                    <div class="panel-heading arrow_box text-center">
                        <h3>GIRO IN GONDOLA</h3>
                    </div>
                    <div class="panel-body text-center">
                        <p class="lead" style="font-size:40px"><strong>70 €</strong></p>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item"><i class="icon-ok text-success"></i> Tour Canal Grande</li>
                        <li class="list-group-item"><i class="icon-ok text-success"></i> Per 2 persone</li>
                        <li class="list-group-item"><i class="icon-ok text-success"></i> 50 minuti</li>
                    </ul>
                    <div class="panel-footer">
                        <a class="btn btn-lg btn-block btn-primary" href="#">Compra ora!</a>
                    </div>
                </div>
                <!-- /PRICE ITEM -->
            </div>


        </div>

        <div class="row text-center"><br>
            <button class="btn btn-primary ladda-button" data-style="expand-right">
                <span class="ladda-label"> Carica altre offerte </span>
            </button>
        </div>


    </div>
</div>
<!-- ========= ./CONTAINER ======== -->


<?php include '../footer.php' ?>
<script src="js.js"></script>
</body>

</html>