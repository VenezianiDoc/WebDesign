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
       
        
        
        
        <div id="login-overlay" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="well">
                                <form id="loginForm" method="POST" action="/user/loggatore.php" novalidate="novalidate">
                                    <div class="form-group">
                                        <label for="nome" class="control-label">Nome:</label>
                                        <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="Nome">
                                    </div>
                                    <div class="form-group">
                                        <label for="cognome">Cognome:</label>
                                        <input id="cognome" class="form-control" type="text" placeholder="Cognome">
                                    </div>
                                    <div  class="form-group">
                                        <label for="email">Email:</label>
                                        <input id="email" class="form-control" type="email" placeholder="e-mail">
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-info">Registrami</button>&emsp;<div class="col-md-1"></div><a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>
                                </form>
                            
                            </div>
            <div class="text-right">
                Se sei già registrato clicca <a href="login.php">qui</a>.
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