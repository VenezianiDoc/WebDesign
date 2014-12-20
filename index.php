<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/stylevenezianidoc.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Titolo, descrizione, autore -->
    <title>Discover Veneto</title>
    <meta name="description" content="Esplora Venezia e tutto il Veneto con le migliori offerte nel web!">
    <meta name="author" content="VenezianiDoc">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>


</head>

<body>

<div id="navigation_bar">
    <?php
    include 'navbar.php'
    ?>
</div>

<!-- ========= CAROUSEL ========= -->
<div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <div class="carousel-inner">

        <div class="item active">
            <img src="http://placehold.it/1900x1080/990000/ffffff&text=Slide%20Uno" alt="Welcome">

            <div class="container">
                <div class="carousel-caption">
                    <h1>Welcome</h1>

                    <p>The <em>Mos Eisley Cantina</em> is open every day, 24/7. Droids are not allowed inside, but your
                        Credits are welcome.</p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="http://placehold.it/1900x1080/990000/ffffff&text=Slide%20Due" alt="Second slide">

            <div class="container">
                <div class="carousel-caption">
                    <h1>References? Why the heck not.</h1>

                    <p>We've been told you will never find a more wretched hive of scum and villainy.</p>
                </div>
            </div>
        </div>

    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span
            class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span
            class="glyphicon glyphicon-chevron-right"></span></a>
</div>
<!-- ========= ./CAROUSEL ======== -->

<br>

<!-- ========= CONTAINER ======== -->
<div class="container">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consequat cursus ex, et dignissim lectus
        pellentesque sit amet. Nunc fermentum nisl id mi molestie sagittis. Curabitur pharetra, lacus et ornare
        placerat, nisi orci lobortis sem, id auctor metus ex eget nulla. Sed hendrerit elementum mi, in sollicitudin est
        molestie nec. Ut volutpat vulputate lacus in pretium. Aliquam consequat dolor tortor, in imperdiet diam posuere
        quis. Vivamus ex metus, finibus eu lectus in, consequat vehicula odio. Aenean imperdiet felis urna, et blandit
        orci accumsan in.</p>

    <p>Donec tempor, odio eu pretium consectetur, massa dui varius odio, viverra eleifend mauris urna id lacus. Cras
        molestie pellentesque magna, in efficitur eros vestibulum tincidunt. Maecenas porta rhoncus iaculis. Ut sit amet
        lorem nec ipsum semper placerat in nec urna. Integer dictum enim in justo rhoncus, et hendrerit orci rhoncus.
        Aenean pretium eget urna id finibus. Suspendisse vel commodo nibh. Pellentesque habitant morbi tristique
        senectus et netus et malesuada fames ac turpis egestas. Interdum et malesuada fames ac ante ipsum primis in
        faucibus. Praesent hendrerit nulla consequat semper sagittis. Duis ut sollicitudin magna.</p>

    <p>Sed lobortis consectetur neque, nec accumsan ligula interdum fringilla. Morbi laoreet, ipsum non efficitur
        aliquet, elit leo vehicula urna, tincidunt tempor ex risus non dolor. Duis ac bibendum eros. Nunc id posuere
        lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan turpis sed urna pharetra, non
        varius tellus venenatis. Donec at porta sem. Donec id dignissim dolor. Cras non diam quam. Curabitur nec lectus
        vehicula, porta eros sed, ultrices metus. Integer ut mauris lectus. Fusce sollicitudin rutrum urna id lobortis.
        Integer pellentesque velit et mollis accumsan. Sed semper ex ac tellus lobortis, vitae posuere velit
        condimentum. Donec suscipit blandit turpis in pellentesque. Ut pretium suscipit sapien et vulputate.</p>


    <br>

    <!-- TAG -->
    <div class="col-sm-12 hidden-xs">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Social tags</h3>
            </div>
            <div class="panel-body tag">
                <h1>Venezia</h1>
                <h4>Gondola</h4>

                <h2>Veneto</h2>

                <h1>San Marco</h1>

                <h2>Laguna</h2>
                <h5>Verona</h5>

                <h3>Treviso</h3>

                <h2>Padova</h2>

                <h1>Hotel</h1>

                <h3>Vino</h3>

                <h2>Cortina</h2>
                <h5>Belluno</h5>
            </div>
        </div>
    </div>
    <!-- ./TAG -->

</div>
<!-- ========= ./CONTAINER ======== -->


<!-- FOOTER -->
<div id="footer">
    <?php
    include 'footer.php'
    ?>
</div>

<!-- ./FOOTER -->

<!-- Script -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>

</html>