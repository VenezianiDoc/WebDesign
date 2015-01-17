<!DOCTYPE html>
<html lang="it">

<head>
    <?php include '../headsecliv.php' ?>
    <title>Area riservata - Discover Veneto</title>
</head>

<body>
<?php $pagina = 'user'; ?>

<?php include '../navbarsecliv.php' ?>

<!-- ========= CONTAINER ======== -->
<div class="container">
    <!-- breadcrumbs -->
    <ol class="breadcrumb">
        <li><a href="../index.php">Home</a>
        </li>
        <!-- pagina attiva-->
        <li class="active">Login</li>
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

        <div id="login-overlay" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="well">
                                <form id="loginForm" method="POST" action="/venezianidoc/user/loggatore.php"
                                      novalidate="novalidate">
                                    <div class="form-group">
                                        <label for="username" class="control-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" value=""
                                               required="" title="Please enter you username"
                                               placeholder="example@gmail.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="control-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                               value="" required="" title="Please enter your password">
                                        <span class="help-block"></span>
                                    </div>
                                    <div id="loginErrorMsg" class="alert alert-error hide">Wrong username og password
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" id="remember"> Ricordami
                                        </label>

                                        <p class="help-block">(se usi un computer privato)</p>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-block">Login</button>

                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <p class="lead">Registrati ora &egrave; <span class="text-success">GRATIS</span></p>
                            <ul class="list-unstyled" style="line-height: 2">
                                <li><span class="fa fa-check text-success"></span> Vedi tutti i tuoi ordini</li>
                                <li><span class="fa fa-check text-success"></span> Riordina velocmente</li>
                                <li><span class="fa fa-check text-success"></span> Salva i tuoi preferiti</li>
                                <li><span class="fa fa-check text-success"></span> Acquisti rapidi</li>
                                <li><span class="fa fa-check text-success"></span> Ottieni un Bonus
                                    <small>(solo per i nuovi membri)</small>
                                </li>
                                <li><a href="#"><u>Read more</u></a></li>
                            </ul>
                            <p><a href="registrati.php" class="btn btn-info btn-block">Registrami ora!</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- ========= ./CONTAINER ======== -->


<?php include '../footersecliv.php' ?>

</body>

</html>