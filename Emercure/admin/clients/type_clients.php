<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-mercure Admin</title>
    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
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
                <li class="nav-item active">
                    <a class="nav-link" href="client.php">Retour client
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

            <h1 class="my-4">Clients</h1>

            <!-- /.col-lg-3 -->


            <div class="col-lg-9">

                <div class="row" style="margin-top: 2em;">

                    <?php

                    if (isset($_GET['submit'])) {

                        switch ($_GET['submit']){

                            case 'Homme':
                                $case = 'homme';
                                by_sexe($case);
                                break;
                            case 'Femme':
                                $case = 'femme';
                                by_sexe($case);
                                break;
                            case 'Client/Commande':
                                all_client_commande();
                                break;
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


