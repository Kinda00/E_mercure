<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-mercure Admin</title>
    <!-- Bootstrap core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../../css/shop-homepage.css" rel="stylesheet">

</head>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$host='postgresql-dop.alwaysdata.net';
$dbname = 'dop_e_mercure';
$username = 'dop';
$password = '';

$dsn = "pgsql:host=$host;port=5432;dbname=$dbname;user=$username;password=$password";
$conn = new PDO($dsn);

include ('../fonctions_admin.php');

?>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">E-mercure</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../admin.php">Acceuil
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-lg-3">

            <h1 class="my-4">Collections</h1>
            <div class="list-group">
                <form action="" method="get" enctype="multipart/form-data">
                    <input type="submit"  class="btn btn-outline-primary"  name="submit" value="Ajouter article">
                </form>

                <form action="" method="get" enctype="multipart/form-data">
                    <input style="margin-top: 1em;"  type="submit" class="btn btn-outline-primary"  name="submit" value="Supprimer article">
                </form>

                <form action="" method="get" enctype="multipart/form-data">
                    <input style="margin-top: 1em;"  type="submit" class="btn btn-outline-primary"  name="submit" value="Modifier prix">
                </form>
                <form action="" method="get" enctype="multipart/form-data">
                    <input style="margin-top: 1em;"  type="submit" class="btn btn-outline-primary"  name="submit" value="Solder Article">
                </form>
            </div>

        </div>
        <!-- /.col-lg-3 -->


        <div class="col-lg-9">

            <div class="row" style="margin-top: 2em;">

                <?php
                //all_articles_normal();
                if (isset($_GET['submit'])) {

                    switch ($_GET['submit']){

                        case 'Ajouter article':
                            include ('Formulaire_ajout_article.html');
                            break;
                        case 'Supprimer article':
                            include ('formulaire_supp_article.html');
                            break;
                        case 'Modifier prix':
                            include ('formulaire_modif_prix.html');
                            break;
                        case 'Solder Article';
                            include ('formulaire_solde_article.html');
                    }

                }
                ?>



            </div>
            <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; E-Mercure 2019</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="../../vendor/jquery/jquery.min.js"></script>
<script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

