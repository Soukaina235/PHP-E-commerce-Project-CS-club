<!--  LISTE DES CATEGORIES  -->

<?php
session_start();

include "../../inc/functions.php";
$visiteurs = getAllUsers();
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>ADMIN : profile</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
    <!-- THE FOLLOWING LINK IS FOR THE VERSION 4.6 OF BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">



    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="../../css/dashboard.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="../../deconnexion.php">Deconnexion</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">

            <?php include("../template/navigation.php"); ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Liste des visiteurs</h1>
                </div>
                <!--  Liste start  -->
                <div>


                    <?php
                    if (isset($_GET["valider"]) && $_GET["valider"] == 'ok')
                        print '
                                <div class="alert alert-success">
                                Visiteur valide avec succes
                                </div>
                            ';
                    ?>

                    <?php
                    // if (isset($_GET["delete"]) && $_GET["delete"] == 'ok')
                    //     print '
                    //             <div class="alert alert-success">
                    //             Categorie supprimee avec succes
                    //             </div>
                    //         ';
                    ?>

                    <?php
                    // if (isset($_GET["modif"]) && $_GET["modif"] == 'ok')
                    //     print '
                    //             <div class="alert alert-success">
                    //             Categorie modifiee avec succes
                    //             </div>
                    //         ';
                    ?>
                    <?php
                    // if (isset($_GET["erreur"]) && $_GET["erreur"] == 'duplicate')
                    //     print '
                    //             <div class="alert alert-danger">
                    //             Nom de categorie duplique
                    //             </div>
                    //         ';
                    ?>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom & Prenom</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($visiteurs as $i => $visiteur) {
                                $i++;
                                print '
                                        <tr>
                                            <th scope="row">' . $i  . '</th>
                                            <td>' . $visiteur['nom'] . ' ' . $visiteur['prenom'] . '</td>
                                            <td>' . $visiteur['email'] . '</td>
                                            <td>
                                                <a href="valider.php?id=' . $visiteur['id'] . '" class="btn btn-success">Valider</a>
                                            </td>

                                        </tr>
                                    ';
                            }
                            ?>

                        </tbody>
                    </table>


                </div>

            </main>
        </div>
    </div>


    <script src="../../js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="../../js/dashboard.js"></script>


    <!-- THE TWO FOLLOWING LINKS ARE FOR THE 4.6 VERSION OF BOOTSTRAP  -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Control de saisie -->
    <script>
        function popUpDeleteCategorie() {
            return confirm("Voulez-vous vraiment supprimer la categgorie?")
        }
    </script>
</body>

</html>
<!--
    The following tag displays a chart
<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
-->