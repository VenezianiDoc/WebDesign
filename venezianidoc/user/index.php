<!DOCTYPE html>
<html lang="it">

<head>

    <?php include '../head.php' ?>
    <title>Area riservata - Discover Veneto</title>
</head>

<body>
<?php $pagina = user; ?>

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

        <div class="row">
            <div class="col-lg-6">
                <div class="row-fluid user-infos cyruxx">
                    <div class="span10 offset1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-user"></i> Informazioni Utente</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row-fluid">
                                    <div class="span3">
                                        <img class="img-circle"
                                             src="../img/photo.jpg"
                                             alt="User Pic">
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
                                <form method="POST" action="/user/loggatore.php">
                                    <button class="btn  btn-primary" type="submit" data-toggle="tooltip"
                                            data-original-title="Send message to user" value=null id="username">Logout
                                        <i class="fa fa-sign-out"></i>
                                    </button>
                                    <span class="pull-right">
                            <button class="btn btn-warning" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Edit this user"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger" type="button" data-toggle="tooltip"
                                    data-original-title="Remove this user"><i class="fa fa-trash"></i></button>  </span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row-fluid user-infos cyruxx">
                    <div class="span10 offset1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-inbox"></i> Acquisti</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row-fluid">
                                    <div class="span6">
                                        <table class="table table-condensed table-responsive table-user-information">
                                            <tbody>
                                            <tr>
                                                <td>Hotel Splendid</td>
                                                <td><span class="pull-right">
                            <button class="btn btn-warning" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Edit"><i class="fa fa-info-circle"></i></button></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Punta della Dogana</td>
                                                <td><span class="pull-right">
                            <button class="btn btn-warning" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Edit"><i class="fa fa-info-circle"></i></button>
                            
                        </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Notte per due</td>
                                                <td><span class="pull-right">
                            <button class="btn btn-warning" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Edit"><i class="fa fa-info-circle"></i></button>
                        </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Giro in gondola</td>
                                                <td><span class="pull-right">
                            <button class="btn btn-warning" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Edit"><i class="fa fa-info-circle"></i></button>
                        </span>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <button class="btn  btn-primary" type="button" data-toggle="tooltip"
                                        data-original-title="shop" onclick="window.location.href='/offerte'">Inizia
                                    shopping
                                </button>
                                    <span class="pull-right">
                                        <button class="btn btn-primary" type="button" data-toggle="tooltip"
                                                data-original-title="Carrello"
                                                onclick="window.location.href='/carrello'">Carrello
                                        </button>
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="row-fluid user-infos cyruxx">
                    <div class="span10 offset1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-thumb-tack"></i> Lista dei desideri</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row-fluid">
                                    <div class="span6">
                                        <table class="table table-condensed table-responsive table-user-information">
                                            <tbody>
                                            <tr>
                                                <td>Abano Terme</td>
                                                <td><span class="pull-right">
                            <button class="btn btn-warning" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Edit this user"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Remove this user"><i class="fa fa-trash"></i></button>
                        </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Notte in rifugio</td>
                                                <td><span class="pull-right">
                            <button class="btn btn-warning" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Edit this user"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Remove this user"><i class="fa fa-trash"></i></button>
                        </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tour con guida C.A.I.</td>
                                                <td><span class="pull-right">
                            <button class="btn btn-warning" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Edit this user"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Remove this user"><i class="fa fa-trash"></i></button>
                        </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Albergo Monte Bianco</td>
                                                <td><span class="pull-right">
                            <button class="btn btn-warning" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Edit this user"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Remove this user"><i class="fa fa-trash"></i></button>
                        </span>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <button class="btn  btn-primary" type="button" data-toggle="tooltip"
                                        data-original-title="Add">Aggiungi articolo
                                </button>
                                    <span class="pull-right">
                            <button class="btn btn-danger" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Remove this user">Svuota
                            </button>
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row-fluid user-infos cyruxx">
                    <div class="span10 offset1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-tags"></i> Tag personali</h3>
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
                        </span>
                                                </td>
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
                        </span>
                                                </td>
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
                        </span>
                                                </td>
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
                        </span>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <button class="btn  btn-primary" type="button" data-toggle="tooltip"
                                        data-original-title="Add">Aggiungi tag
                                </button>
                                    <span class="pull-right">
                            <button class="btn btn-danger" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Remove this user">Resetta
                            </button>
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


</div>
<!-- ========= ./CONTAINER ======== -->


<?php include '../footer.php' ?>

</body>

</html>