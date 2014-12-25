<!DOCTYPE html>
<html lang="it">

<head>
    <?php include '../head.php' ?>
    <title>Destinazioni - Discover Veneto</title>
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
            <li class="active">Destinazioni</li>
        </ol>
    </div>
    <!-- /breadcrumbs -->
    <div class="container">
        <div class="page-header">
            <h1>Destinazioni
            <small> Scegli la tua meta ideale</small>
        </h1>
        </div>

        <div class="container">
            <div class="row text-center">
                <div class="hidden-xs col-lg-12 col-md-12">

                    <!--Codice per il Widget desktop -->

                    <div class="ui-group-buttons text-center">
                        <h2>Trova la tua meta ideale:</h2>
                        <button type="button" class="btn btn-primary">Relax</button>
                        <div class="or"></div>
                        <button type="button" class="button btn btn-success">Avventura</button>

                        <button type="button" class="btn btn-primary">Coppia</button>
                        <div class="or"></div>
                        <button type="button" class="button btn btn-success">Famiglia</button>

                        <button type="button" class="btn btn-primary">Costume</button>
                        <div class="or"></div>
                        <button type="button" class="button btn btn-success">Sciarpa</button>
                            <br>
                        <button type="button" class="btn btn-primary">Mare</button>
                        <div class="or"></div>
                        <button type="button" class="button btn btn-success">Montagna</button>
                        
                        <button type="button" class="btn btn-primary">Metropoli</button>
                        <div class="or"></div>
                        <button type="button" class="button btn btn-success">Sobborgo</button>
                        
                        <button type="button" class="btn btn-primary">$$$</button>
                        <div class="or"></div>
                        <button type="button" class="button btn btn-success">$</button>

                    </div>
                    <hr>

                </div>

                <div class="visible-xs">
                    Widget mobile
                    <!--Codice per il Widget mobile -->
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-sm-2">
                    <?php include 'navbarorizzontal.php' ?>
                </div>
                <div class="col-xs-12 col-sm-10">

                    <p>Sed lobortis consectetur neque, nec accumsan ligula interdum fringilla. Morbi laoreet, ipsum non efficitur aliquet, elit leo vehicula urna, tincidunt tempor ex risus non dolor. Duis ac bibendum eros. Nunc id posuere lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan turpis sed urna pharetra, non varius tellus venenatis. Donec at porta sem. Donec id dignissim dolor. Cras non diam quam. Curabitur nec lectus vehicula, porta eros sed, ultrices metus. Integer ut mauris lectus. Fusce sollicitudin rutrum urna id lobortis. Integer pellentesque velit et mollis accumsan. Sed semper ex ac tellus lobortis, vitae posuere velit condimentum. Donec suscipit blandit turpis in pellentesque. Ut pretium suscipit sapien et vulputate.
                    </p>

                </div>
            </div>

        </div>
    </div>
    <!-- ========= ./CONTAINER ======== -->


    <?php include '../footer.php' ?>

</body>

</html>