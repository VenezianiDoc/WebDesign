<div id="navigation_bar">
    <nav class="navbar navbar-inverse navbar-fixed-top" id="primary-nav">
        <div class="container">
            <!-- Header della navbar -->
            <div class="navbar-header">
                <!-- Pulsanti per v. mobile -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Logo o nome del sito  -->
                <a class="navbar-brand" <?php if ($pagina == 'home') {
                    echo 'id="home"';
                } ?> href="../index.php">Discover Veneto</a>
            </div>
            <div class="navbar-collapse collapse">
                <form class="navbar-form navbar-right" role="search" action="/search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Cerca...">
                      <span class="input-group-btn">
                          <button class="btn btn-default" type="submit">
                              <span class="glyphicon glyphicon-search"></span>
                          </button>
                     </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-left">
                    <!-- Link semplici -->
                    <li <?php if ($pagina == 'offerte') {
                        echo 'class="active"';
                    } ?> ><a href="../offerte">Offerte</a>
                    </li>
                    <!-- Link dropdown DESTINAZIONI -->
                    <li class="dropdown <?php if ($pagina == 'destinazioni') {
                        echo ' active';
                    } ?>"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Destinazioni<span
                                class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="../destinazioni">Indice destinazioni</a>
                            </li>
                            <li><a href="../destinazioni/musei">Musei</a>
                            </li>
                            <li><a href="../destinazioni/mostre">Mostre &amp; Concerti</a>
                            </li>
                            <li><a href="../destinazioni/alberghi">Alberghi &amp; Alloggi</a>
                            </li>
                            <li><a href="../destinazioni/locali">Locali &amp; Ristorazione</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Link dropdown CATEGORIE -->
                    <li class="dropdown <?php if ($pagina == categorie) {
                        echo ' active';
                    } ?>"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Categorie<span
                                class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="../categorie/index.php">Indice categorie</a>
                            </li>
                            <li><a href="../categorie/avventura">Avventura</a>
                            </li>
                            <li><a href="../categorie/relax">Relax &amp; Benessere</a>
                            </li>
                            <li><a href="../categorie/arte">Arte</a>
                            </li>
                            <li><a href="../categorie/famiglia">Famiglia</a>
                            </li>
                            <li><a href="../categorie/studenti">Studenti</a>
                            </li>
                            <li><a href="../categorie/business">Business Man</a>
                            </li>
                        </ul>
                    </li>
                    <li <?php if ($pagina == 'viaggiare') {
                        echo 'class="active"';
                    } ?>><a href="../viaggiaresicuri">Viaggiare sicuri</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li <?php if ($pagina == 'userpage') {
                        echo 'class="active"';
                    } ?>>
                        <?php if (!isset($_SESSION['username'])) {
                            echo '<a href="../user/login.php">Accedi</a>';
                        } elseif ($_SESSION['username'] == ' ') {
                            echo '<a href="../user/index.php">Il tuo acconut</a>';
                        } else {
                            echo '<a href="../user/index.php">Account di ' . $_SESSION['username'] . '</a>';
                        } ?>
                    </li>
                    <li <?php if ($pagina == 'cart') {
                        echo 'class="active"';
                    } ?>><a href="../carrello"><i class="fa fa-shopping-cart"></i> Carrello</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- ========= ./NAVBAR ========= -->
