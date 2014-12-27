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

            Dati utente, acquisti e lista desideri POSSIBILITA DI AGGIUNGERE TAG

            <div class="row">
                <div class="col-lg-6">
                    <h3>Utente</h3>
                    <div class="row-fluid user-infos cyruxx">
                        <div class="span10 offset1">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Informazioni</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row-fluid">
                                        <div class="span3">
                                            <img class="img-circle" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" alt="User Pic">
                                        </div>
                                        <br>
                                        <div class="span6">
                                            <strong><?php echo $_SESSION['user']; ?></strong>
                                            <br>
                                            <table class="table table-condensed table-responsive table-user-information">
                                                <tbody>
                                                    <tr>
                                                        <td>Lingua:</td>
                                                        <td>Italiano</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Registrato dal:</td>
                                                        <td>11/12/2014</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Acquisti:</td>
                                                        <td>15</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tag personali</td>
                                                        <td>3</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <button class="btn  btn-primary" type="button" data-toggle="tooltip" data-original-title="Send message to user">Logout <i class="fa fa-sign-out"></i>
                                    </button>
                                    <span class="pull-right">
                            <button class="btn btn-warning" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Edit this user"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Remove this user"><i class="fa fa-trash"></i></button>
                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3>Acquisti</h3>
                </div>
                <div class="col-lg-6">
                    <h3>Lista dei desideri</h3>
                </div>
                <div class="col-lg-6">
                    <h3>Tag personali</h3>
                    <div class="row-fluid user-infos cyruxx">
                        <div class="span10 offset1">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Tag personali</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row-fluid">
                                        <div class="span6">
                                            <table class="table table-condensed table-responsive table-user-information">
                                                <tbody>
                                                    <tr>
                                                        <td>Montagna</td>
                                                        <td><span class="pull-right">
                            <button class="btn btn-warning" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Edit this user"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Remove this user"><i class="fa fa-trash"></i></button>
                        </span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mare</td>
                                                        <td><span class="pull-right">
                            <button class="btn btn-warning" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Edit this user"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Remove this user"><i class="fa fa-trash"></i></button>
                        </span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Castelli</td>
                                                        <td><span class="pull-right">
                            <button class="btn btn-warning" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Edit this user"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Remove this user"><i class="fa fa-trash"></i></button>
                        </span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Barche</td>
                                                        <td><span class="pull-right">
                            <button class="btn btn-warning" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Edit this user"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Remove this user"><i class="fa fa-trash"></i></button>
                        </span></td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <button class="btn  btn-primary" type="button" data-toggle="tooltip" data-original-title="Add">Aggiungi tag</button>
                                    <span class="pull-right">
                            <button class="btn btn-danger" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Remove this user">Resetta</button>
                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

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