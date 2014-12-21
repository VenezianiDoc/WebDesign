<!DOCTYPE html>
<html lang="it">

<head>
    <?php include 'head.php' ?>
    <title>Discover Veneto</title>

</head>

<body>

    <?php include 'navbar.php' ?>

    <!-- ========= CAROUSEL ========= -->
    <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">

            <div class="item active">
                <img src="http://www.hoteldelfino-mestre.com/wp-content/uploads/2013/09/venezia.jpg" alt="First slide">

                <div class="container">
                    <div class="carousel-caption">
                        <h1>Venezia</h1>
                        <p>La più bella città del mondo con la sua laguna e la sua storia</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <!-- <img src="http://placehold.it/1900x1080/990000/ffffff&text=Offerta%20Due" alt="Second slide"> -->
                <img src="http://islandlakecatskiing.com/files/uploads/2013/10/trek_gall_ILL3956.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Dolomiti</h1>
                        <p>Il più bel patrimonio dell'UNESCO</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="http://www.villa-albonico.com/images/slider-home/4.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Lago di Garda</h1>
                        <p>Il più grande Lago d'Italia</p>
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
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consequat cursus ex, et dignissim lectus pellentesque sit amet. Nunc fermentum nisl id mi molestie sagittis. Curabitur pharetra, lacus et ornare placerat, nisi orci lobortis sem, id auctor metus ex eget nulla. Sed hendrerit elementum mi, in sollicitudin est molestie nec. Ut volutpat vulputate lacus in pretium. Aliquam consequat dolor tortor, in imperdiet diam posuere quis. Vivamus ex metus, finibus eu lectus in, consequat vehicula odio. Aenean imperdiet felis urna, et blandit orci accumsan in.</p>

        <p>Donec tempor, odio eu pretium consectetur, massa dui varius odio, viverra eleifend mauris urna id lacus. Cras molestie pellentesque magna, in efficitur eros vestibulum tincidunt. Maecenas porta rhoncus iaculis. Ut sit amet lorem nec ipsum semper placerat in nec urna. Integer dictum enim in justo rhoncus, et hendrerit orci rhoncus. Aenean pretium eget urna id finibus. Suspendisse vel commodo nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent hendrerit nulla consequat semper sagittis. Duis ut sollicitudin magna.</p>

        <p>Sed lobortis consectetur neque, nec accumsan ligula interdum fringilla. Morbi laoreet, ipsum non efficitur aliquet, elit leo vehicula urna, tincidunt tempor ex risus non dolor. Duis ac bibendum eros. Nunc id posuere lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan turpis sed urna pharetra, non varius tellus venenatis. Donec at porta sem. Donec id dignissim dolor. Cras non diam quam. Curabitur nec lectus vehicula, porta eros sed, ultrices metus. Integer ut mauris lectus. Fusce sollicitudin rutrum urna id lobortis. Integer pellentesque velit et mollis accumsan. Sed semper ex ac tellus lobortis, vitae posuere velit condimentum. Donec suscipit blandit turpis in pellentesque. Ut pretium suscipit sapien et vulputate.</p>


        <br>

        <!-- TAG -->
        <div class="col-sm-12">
            <!-- Disponibile anche per mobile -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Social tags</h3>
                </div>
                <div class="panel-body tag">
                    <a href="search/"><h1>Venezia</h1></a>
                    <a href="search/"><h4>Gondola</h4></a>
                    <a href="search/"><h2>Veneto</h2></a>
                    <a href="search/"><h1>San Marco</h1></a>
                    <a href="search/"><h2>Laguna</h2></a>
                    <a href="search/"><h5>Verona</h5></a>
                    <a href="search/"><h3>Treviso</h3></a>
                    <a href="search/"><h2>Padova</h2></a>
                    <a href="search/"><h1>Hotel</h1></a>
                    <a href="search/"><h3>Vino</h3></a>
                    <a href="search/"><h2>Cortina</h2></a>
                    <a href="search/"><h5>Belluno</h5></a>

                </div>
            </div>
        </div>
        <!-- ./TAG -->

    </div>
    <!-- ========= ./CONTAINER ======== -->


    <?php include 'footer.php' ?>

</body>

</html>