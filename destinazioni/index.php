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

                <div class="visible-xs col-xs-12">
                    <!--Codice per il Widget mobile -->
                    <h2>Trova la tua meta ideale:</h2>

                    <form>
                        <fieldset>

                            <select name="destinazini" class="form-control">
                                <option selected="selected">Relax</option>
                                <option>Avventura</option>
                                <option>Coppia</option>
                                <option>Famiglia</option>
                                <option>Costume</option>
                                <option>Sciarpa</option>
                                <option>Mare</option>
                                <option>Montagna</option>
                                <option>Metropoli</option>
                                <option>Sobborgo</option>
                                <option>$$$</option>
                                <option>$</option>
                            </select>
                        </fieldset>
                    </form>

                    <hr>

                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-sm-2">
                    <?php include 'navbarorizzontal.php' ?>
                </div>
                <div class="col-xs-12 col-sm-10">
            <div class="row">
                
                <div class="well">
                    <div class="media">

                        <div class="media-body">
                            <a href="musei/item1.php"><h4 class="media-heading">Offerta 1</h4></a>

                            <p class="text-right">Città</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero <a href="musei/item1.php">[&hellip;]</a>
                            </p>
                            <ul class="list-inline list-unstyled">
                                <li><span><i class="glyphicon glyphicon-calendar"></i> fino al 12 febbraio</span>
                                </li>
                                <li>|</li>
                                <span><i class="glyphicon glyphicon-comment"></i> 2 commenti</span>
                                <li>|</li>
                                <li>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </li>
                                <li>|</li>
                                <li>
                                    <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
                                    <span><i class="fa fa-facebook-square"></i></span>
                                    <span><i class="fa fa-twitter-square"></i></span>
                                    <span><i class="fa fa-google-plus-square"></i></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="well">
                    <div class="media">

                        <div class="media-body">
                            <a href="musei/item1.php"><h4 class="media-heading">Offerta 2</h4></a>

                            <p class="text-right">Città</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero <a href="musei/item1.php">[&hellip;]</a>
                            </p>
                            <ul class="list-inline list-unstyled">
                                <li><span><i class="glyphicon glyphicon-calendar"></i> fino al 17 febbraio</span>
                                </li>
                                <li>|</li>
                                <span><i class="glyphicon glyphicon-comment"></i> 9 commenti</span>
                                <li>|</li>
                                <li>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </li>
                                <li>|</li>
                                <li>
                                    <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
                                    <span><i class="fa fa-facebook-square"></i></span>
                                    <span><i class="fa fa-twitter-square"></i></span>
                                    <span><i class="fa fa-google-plus-square"></i></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="well">
                    <div class="media">

                        <div class="media-body">
                            <a href="musei/item1.php"><h4 class="media-heading">Offerta 3</h4></a>

                            <p class="text-right">Città</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero <a href="musei/item1.php">[&hellip;]</a>
                            </p>
                            <ul class="list-inline list-unstyled">
                                <li><span><i class="glyphicon glyphicon-calendar"></i> fino al 23 febbraio</span>
                                </li>
                                <li>|</li>
                                <span><i class="glyphicon glyphicon-comment"></i> 5 commenti</span>
                                <li>|</li>
                                <li>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </li>
                                <li>|</li>
                                <li>
                                    <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
                                    <span><i class="fa fa-facebook-square"></i></span>
                                    <span><i class="fa fa-twitter-square"></i></span>
                                    <span><i class="fa fa-google-plus-square"></i></span>
                                </li>
                            </ul>
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