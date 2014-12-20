<!DOCTYPE html>
<html lang="it">

<head>
    <?php
    include 'head.php'
    ?>
    <title>Discover Veneto</title>

</head>

<body>

<?php
include 'navbar.php'
?>

<!-- ========= CAROUSEL ========= -->
<div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <div class="carousel-inner">

        <div class="item active">
            <img src="http://placehold.it/1900x1080/990000/ffffff&text=Offerta%20Uno" alt="Welcome">

            <div class="container">
                <div class="carousel-caption">
                    <h1>Welcome</h1>

                    <p>The <em>Mos Eisley Cantina</em> is open every day, 24/7. Droids are not allowed inside, but your
                        Credits are welcome.</p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="http://placehold.it/1900x1080/990000/ffffff&text=Offerta%20Due" alt="Second slide">

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
<?php
include 'footer.php'
?>
</body>

</html>