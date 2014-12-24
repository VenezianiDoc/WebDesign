<!DOCTYPE html>
<html lang="it">
<head>

    <?php include '../head.php' ?>
    <title>Area riservata - Discover Veneto</title>
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
        <li class="active">Area Riservata</li>
    </ol>
</div>
<!-- /breadcrumbs -->
<div class="container">

    <div class="page-header">
        <h1>Area riservata
            <small> Benvenuto <?php echo $_SESSION['user']; ?></small>
        </h1>
    </div>

    <div class="container">

        Dati utente, acquisti e lista desideri <<< POSSIBILITA DI AGGIUNGERE TAG

    </div>

    <div class="container">
        <form method="POST" action="/user/loggatore.php">
            Clicca qui per usicre: &emsp;
            <button type="submit" class="btn" value=null id="username">Esci</button>
        </form>
    </div>

</div>
<!-- ========= ./CONTAINER ======== -->


<?php include '../footer.php' ?>

</body>

</html>