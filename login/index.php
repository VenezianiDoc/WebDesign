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
            <h1>Login
            <small> Accedi per vivere un'esperienza ancora più intensa</small>
        </h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form class="form-inline">
                        <fieldset>
                            <label for="nome">Utente:</label>
                            <input type="text" class="input-small" placeholder="e-mail">
                            <label for="nome">Password:</label>
                            <input type="password" class="input-small" placeholder="Password">
                            <label class="checkbox">Ricordami </label>
                            <input type="checkbox" checked="checked">
                            <button type="submit" class="btn input-small">Accedi</button>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <br>Se non sei ancora registrato, clicca <a href="registrati.php">qui</a>.
                </div>
            </div>
        </div>
    </div>
    <!-- ========= ./CONTAINER ======== -->


    <?php include '../footer.php' ?>

</body>

</html>