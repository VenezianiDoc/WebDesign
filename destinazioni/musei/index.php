<!DOCTYPE html>
<html lang="it">

<head>
    <?php include "../../head.php" ?>
    <title>Musei - Discover Veneto</title>
</head>

<body>

    <?php include "../../navbar.php" ?>

    <!-- ========= CONTAINER ======== -->
    <div class="container">
        <!-- breadcrumbs -->
        <ol class="breadcrumb">
            <li><a href="/index.php">Home</a>
            </li>
            <li><a href="/destinazioni/">Destinazioni</a>
            </li>
            <!-- pagina attiva-->
            <li class="active">Musei</li>
        </ol>
    </div>
    <!-- /breadcrumbs -->
    <div class="container">
        <div class="page-header">
            <h1>Musei
            <small> Le tue destinazioni preferite!</small>
        </h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <?php include '../navbarorizzontal.php' ?>
                </div>
                <div class="col-xs-12 col-sm-10">
                    
                     <div class="well">
      <div class="media">
      	
  		<div class="media-body">
            <a href="item1.php"><h4 class="media-heading">Punta della Dogana</h4></a>
          <p class="text-right">Venezia</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero <a href="item1.php">[&hellip;]</a></p>
          <ul class="list-inline list-unstyled">
  			<li><span><i class="glyphicon glyphicon-calendar"></i> fino al 12 febbraio</span></li>
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
    		<a href="item1.php"><h4 class="media-heading">Palazzo Grassi</h4></a>
          <p class="text-right">Venezia</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero <a href="item1.php">[&hellip;]</a></p>
          <ul class="list-inline list-unstyled">
  			<li><span><i class="glyphicon glyphicon-calendar"></i> fino al 13 maggio</span></li>
            <li>|</li>
            <span><i class="glyphicon glyphicon-comment"></i> 5 commenti</span>
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

                    
                    
                </div>
            </div>
        </div>
    </div>
    <!-- ========= ./CONTAINER ======== -->


    <?php include '../../footer.php' ?>

</body>

</html>