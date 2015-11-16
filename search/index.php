<!DOCTYPE html>
<html lang="it">

<head>
    <?php include '../headsecliv.php' ?>
    <title>Search - Discover Veneto</title>
</head>

<body>
<?php $pagina='search'; ?>
<?php include '../navbarsecliv.php' ?>

<!-- ========= CONTAINER ======== -->
<div class="container">
    <!-- breadcrumbs -->
    <ol class="breadcrumb">
        <li><a href="../index.php">Home</a>
        </li>
        <!-- pagina attiva-->
        <li class="active">Search</li>
    </ol>
</div>
<!-- /breadcrumbs -->
<div class="container">
    <div class="page-header">
        <h1>Pagina risultati
            <small> Risultati di ricerca per "parola"</small>
        </h1>
    </div>

    <div class="input-group-btn search-panel">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            <span id="search_concept" class="">Ordina per</span> <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
            <li onClick="window.location.reload();"><a href="#">Qualsiasi</a>
            </li>
            <li class="divider"></li>
            <li onClick="window.location.reload();"><a href="#">Offerte</a>
            </li>
            <li onClick="window.location.reload();"><a href="#">Destinazioni</a>
            </li>
            <li onClick="window.location.reload();"><a href="#">Categorie</a>
            </li>
        </ul>
    </div>

    <div class="container">
        <h2>Pagina <?php echo rand(0, 55); ?>
            <small> Sottotitolo pagina</small>
        </h2>
        <br>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consequat cursus ex, et dignissim lectus
            pellentesque sit amet. Nunc fermentum nisl id mi molestie sagittis. Curabitur pharetra, lacus et ornare
            placerat, nisi orci lobortis sem, id auctor metus ex eget nulla. Sed hendrerit elementum mi, in sollicitudin
            est molestie nec. Ut volutpat vulputate lacus in pretium...</p>
        <hr>

        <h2>Pagina <?php echo rand(0, 55); ?>
            <small> Sottotitolo pagina</small>
        </h2>
        <br>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consequat cursus ex, et dignissim lectus
            pellentesque sit amet. Nunc fermentum nisl id mi molestie sagittis. Curabitur pharetra, lacus et ornare
            placerat, nisi orci lobortis sem, id auctor metus ex eget nulla. Sed hendrerit elementum mi, in sollicitudin
            est molestie nec. Ut volutpat vulputate lacus in pretium...</p>
        <hr>

        <h2>Pagina <?php echo rand(0, 55); ?>
            <small> Sottotitolo pagina</small>
        </h2>
        <br>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consequat cursus ex, et dignissim lectus
            pellentesque sit amet. Nunc fermentum nisl id mi molestie sagittis. Curabitur pharetra, lacus et ornare
            placerat, nisi orci lobortis sem, id auctor metus ex eget nulla. Sed hendrerit elementum mi, in sollicitudin
            est molestie nec. Ut volutpat vulputate lacus in pretium...</p>
        <hr>

        
        <div class="text-center">
            <ul class="pagination pagination-large">
                <li class="disabled"><span>&laquo;</span>
                </li>            
                <li class="active"><span>1</span></li>
                <li>
                <a href="#">2</a>
                </li>
                <li><a href="#" rel="next">&raquo;</a>
                </li>	
            </ul>
</div>
        
    </div>
    <?php include '../footersecliv.php' ?>

</div>
</body>

</html>