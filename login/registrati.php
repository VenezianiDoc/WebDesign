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
            <li class="active">Nuovo utente</li>
        </ol>
    </div>
    <!-- /breadcrumbs -->
    <div class="container">

        <div class="page-header">
            <h1>Registrati
            <small> Accedi per vivere un'esperienza ancora più intensa</small>
        </h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form>
                        <fieldset>
                            <!-- esiste tag  <input type="datetime"> che indica i campi contenenti le date con orario -->
                            <label for="nome">Nome:</label>
                            <input id="nome" class="input-small" type="text" placeholder="Nome">
                            <label for="cognome">Cognome:</label>
                            <input id="cognome" class="input-small" type="text" placeholder="Cognome">
                            <label for="email">Email:</label>
                            <input id="email" class="input-small" type="email" placeholder="e-mail">
                            <button type="submit" class="btn input-small">Registrami</button>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12"><br>
                    Se sei già registrato clicca <a href="index.php">qui</a>.
                </div>
            </div>
        </div>
    </div>
    <!-- ========= ./CONTAINER ======== -->


    <?php include '../footer.php' ?>

</body>

</html>