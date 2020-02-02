<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= $title ?></title>
        <meta name="description" content="<?= $meta_description; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">
        <!-- Google fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo:400,400i">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
        <!-- OwlCarousel -->
        <link rel="stylesheet" href="./vendor/owl.carousel/assets/owl.carousel.css">
        <link rel="stylesheet" href="./vendor/owl.carousel/assets/owl.theme.default.min.css">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="./css/style.blue.css" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="./css/custom.css">
        <!-- Favicon-->
        <link rel="shortcut icon" href="./img/logo_nacomed_resized.png">
        <!-- TinyMCE -->
        <?php if (isset($tinymce)) {
                echo '<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=0ofr5ymckej6ac4mcq2doqoozjut2zifnyjjfp067bqy5s12"></script>';
                echo $tinymce;
            }
        ?>
    </head>

    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top onboard-nav" id="mainNav">
            <div class="container nav-div">
                <a class="logo navbar-brand" href="../../.../../../index.php"><img class="logo-nacomed" src="../../../img/logo_nacomed.png" /></a>
                    <button class="menu_btn navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                        <i class="fas fa-bars"></i>
                    </button>
            
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../../.../../../index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../../index.php?action=displayOnboard">Embarquement</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../../index.php?action=displaySupport">Nous soutenir</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../../index.php?action=displayContact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../../index.php?action=displayContact">Communauté</a>
                        </li>
                        <?php
                            if (isset($_SESSION['user'])) {
                                $sessionUser = $_SESSION['user'];
                                echo '<li class="nav-item admin-link"><a class="nav-link" href="../../../index.php?action=displayAdmin">Administration</a></li>';
                                echo '<li class="nav-item logout"><a id ="signOut_link" class="nav-link" href="../../../index.php?action=signOut">Déconnexion</a></li>';
                            } else {
                                echo '<li class="nav-item login"><a class="nav-link" href="../../../index.php?action=login">Connexion</a></li>';
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>

        <?= $content ?>

        <!-- Footer -->
        <footer class="page-footer font-small special-color-dark pt-4">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 Copyright :
            <a href="./index.php?action=displayContact"> NACOMED</a>
            <a href="./index.php?action=displayMentions">Mentions légales</a>
        </div>
        <!-- Copyright -->

        </footer>
        <!-- Footer -->

        <div id="modal_logout" class="modal">
            <div class="modal_content">
                <p id="modal_text">A bientôt <?php echo $sessionUser; ?></p>
            </div>
        </div>

        <!-- JavaScript files--> 
        <script src="./vendor/jquery/jquery/jquery.min.js"></script>
        <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="./js/signOut.js"></script>
        <script src="./js/controllers/signOut.js"></script>
        <script src="./js/controllers/adminOptions.js"></script>
        <script src="./js/adminOptions.js"></script>
    </body>
</html>