<!DOCTYPE html>
<html lang="it">

<head>
    <?php
    include '../head.php'
    ?>
    <title>Area riservata - Discover Veneto</title>
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
        <li class="active">Area Riservata</li>
    </ol>
</div>
<!-- /breadcrumbs -->
<div class="container">

    <div class="page-header">
        <h1>Login
            <small> Scegli la tua vacanza ideale</small>
        </h1>
    </div>

    <div class="container">
        <div class="raw">
            <div class="col-lg-12">
                <form class="form-inline">
                    <fieldset>
                        <legend>Login</legend>
                        <input type="text" class="input-small" placeholder="Email">
                        <input type="password" class="input-small" placeholder="Password">
                        <label class="checkbox">
                            <input type="checkbox"> Ricordami
                        </label>
                        <button type="submit" class="btn">Loggin</button>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="raw">
            <div class="col-lg-12">
                <!-- Per l'iscrizione al sito -->
                <form>
                    <fieldset>
                        <legend>Registrati</legend>
                        <!-- esiste tag  <input type="datetime"> che indica i campi contenenti le date con orario -->
                        <label for="nome"> Nome:</label><input id="nome" type="text">
                        <label for="cognome">Cognome</label><input id="cognome" type="text">
                        <label for="email">Email</label><input id="email" type="email">
                        <button type="submit" class="btn">Registrami</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>


    <?php
    include '../footer.php'
    ?>
</div>
</body>

</html>