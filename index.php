<!DOCTYPE html>
<html lang="it">
<head>
    <?php include 'head.php' ?>
    <title>Discover Veneto</title>
</head>

<body>

    <?php include 'navbar.php' ?>

    <!-- ========= CAROUSEL ========= -->
    <div id="myCarousel" class="carousel slide hidden-print">
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
    
    <div class="container visible-print-block">
        <div class="page-header">
            <h1>Discover Veneto<small> Home Page</small>
            </h1>
        </div>    
    </div>
    
    <div class="container">
        <p>Il Veneto è una regione italiana a statuto ordinario di 4.927.401 abitanti situata nell'Italia nord-orientale; capitale storica e capoluogo amministrativo è Venezia. Confina a nord con il Trentino-Alto Adige e l'Austria, a sud con l'Emilia-Romagna, ad ovest con la Lombardia, a est con il Friuli-Venezia Giulia, e a sud-est con il Mar Adriatico. Insieme al Trentino-Alto Adige e al Friuli-Venezia Giulia il Veneto costituisce la macroarea del Triveneto o delle Tre Venezie.</p>

        <p>Per oltre un millennio indipendente nell'ambito della Repubblica Veneta, dopo una breve parentesi austriaca e francese (1797-1814), e quindi nominalmente autonomo per alcuni decenni come Regno Lombardo-Veneto sotto l'Impero austriaco, nel 1866, secondo i termini dell'accordo di pace che fece seguito alla Guerra austro-prussiana, il Veneto venne assegnato alla Francia che lo cedette al Regno d'Italia. Ancora oggi, oltre all'italiano, la maggioranza dei veneti, parla veneto, oltre ad emiliano, friulano, ladino, bavarese e cimbro in alcuni comuni.</p>

        <p>Per lungo tempo terra di povertà ed emigrazione, il Veneto, a seguito di un notevole sviluppo industriale, è oggi una delle regioni più ricche d'Italia. Grazie al suo patrimonio paesaggistico, storico, artistico ed architettonico è, con oltre 15,7 milioni di visitatori e 63,4 milioni di presenze turistiche all'anno, la regione più visitata d'Italia.</p>


        <br>

        <!-- TAG -->
        <div class="col-sm-12 hidden-print">
            <!-- Disponibile anche per mobile -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Social tags</h3>
                </div>
                <div class="panel-body tag">
                    <a class="tag" href="search/"><h1>Venezia</h1></a>
                    <a class="tag" href="search/"><h4>Gondola</h4></a>
                    <a class="tag" href="search/"><h2>Veneto</h2></a>
                    <a class="tag" href="search/"><h1>San Marco</h1></a>
                    <a class="tag" href="search/"><h2>Laguna</h2></a>
                    <a class="tag" href="search/"><h5>Verona</h5></a>
                    <a class="tag" href="search/"><h3>Treviso</h3></a>
                    <a class="tag" href="search/"><h2>Padova</h2></a>
                    <a class="tag" href="search/"><h1>Hotel</h1></a>
                    <a class="tag" href="search/"><h3>Vino</h3></a>
                    <a class="tag" href="search/"><h2>Cortina</h2></a>
                    <a class="tag" href="search/"><h5>Belluno</h5></a>
                    <a class="tag" href="search/"><h1>Doloniti</h1></a>
                    <a class="tag" href="search/"><h4>Prosecco</h4></a>
                    <a class="tag" href="search/"><h2>Mare Adriatico</h2></a>
                    <a class="tag" href="search/"><h1>Italia</h1></a>
                    <a class="tag" href="search/"><h2>Lago di Garda</h2></a>
                    <a class="tag" href="search/"><h5>Friuli-Venezia Giulia</h5></a>
                    <a class="tag" href="search/"><h3>Regione Veneto</h3></a>
                    <a class="tag" href="search/"><h2>Dolomiti</h2></a>
                    <a class="tag" href="search/"><h1>B&amp;B</h1></a>
                    <a class="tag" href="search/"><h4>Cultura</h4></a>
                    <a class="tag" href="search/"><h2>Rialto</h2></a>
                    <a class="tag" href="search/"><h5>Palazzo Ducale</h5></a>

                </div>
            </div>
        </div>
        <!-- ./TAG -->

    </div>
    <!-- ========= ./CONTAINER ======== -->


    <?php include 'footer.php' ?>

</body>

</html>