<!DOCTYPE html>
<html lang="it">

<head>
    <?php include 'head.php' ?>
    <title>Categorie - Discover Veneto</title>
</head>

<body>

    <?php include 'navbar.php' ?>

    <!-- ========= CONTAINER ======== -->
    <div class="container">
        <!-- breadcrumbs -->
        <ol class="breadcrumb">
            <li><a href="index">Home</a>
            </li>
            <!-- pagina attiva-->
            <li class="active">Contatti</li>
        </ol>
    </div>
    <!-- /breadcrumbs -->

    <div class="container">
        <div class="page-header">
            <h1>Contattati<small> Tutti i nostri contatti</small></h1>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <p>Tel: +39 041 3456 908
                    <br>Indirizzo: Venezia, Via Torino 87
                    <br>
                </p>
            </div>
        </div>
        <div class="row">
            <br>
            <br>
            <div class="col-md-6 col-md-offset-3">

                <fieldset>
                    <legend>Compila i campi seguenti per inviarci un e-mail:</legend>

                    <!-- Nome -->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Il tuo nome</label>
                        <div class="col-md-9">
                            <input id="name" name="name" type="text" placeholder="Nome" class="form-control">
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="email">La tua e-mail</label>
                        <div class="col-md-9">
                            <input id="email" name="email" type="text" placeholder="e-mail" class="form-control">
                        </div>
                    </div>

                    <!-- Messaggio  -->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="message">Il tuo messaggio</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="message" name="message" placeholder="Inserisci qui il testo dell'e-mail" rows="5"></textarea>
                        </div>
                    </div>

                    <!-- Pulsante -->
                    <div class="form-group">
                        <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-primary btn-lg">Invia</button>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
    <!-- ========= ./CONTAINER ======== -->


    <?php include 'footer.php' ?>

</body>

</html>