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
        <!-- OwlCarousel -->
        <link rel="stylesheet" href="./vendor/owl.carousel/assets/owl.carousel.css">
        <link rel="stylesheet" href="./vendor/owl.carousel/assets/owl.theme.default.min.css">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="./css/custom.min.css">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="./css/style.blue.min.css" id="theme-stylesheet">
        <!-- Favicon-->
        <link rel="shortcut icon" href="./img/logo_nacomed_resized.webp">
    </head>

    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top onboard-nav" id="mainNav">
            <div class="container nav-div">
                <a class="logo navbar-brand" href="../../.../../../index.php"><img class="logo-nacomed" src="../../../img/logo_nacomed.webp" /></a>
                    <button class="menu_btn navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                        <i class="fas fa-bars"></i>
                    </button>
            
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <li class="nav-item">
                            <a class="nav-link home-link" href="../../.../../../index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link onboard-link" href="../../../index.php?action=displayOnboard">Embarquement</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sc-link" href="./index.php?action=displaySciences">Sciences</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link contact-link" href="../../../index.php?action=displayContact">Contact</a>
                        </li>
                        <?php
                            if (isset($_SESSION['user'])) {
                                $sessionUser = $_SESSION['user'];
                                echo '<div class="sign-links">
                                        <li class="nav-item admin-link"><a class="signin-link-back" href="./index.php?action=displayAdmin">Admin</a></li>
                                        <li class="nav-item logout"><a id="signOut_link" class="signOut_link-back" href="./index.php?action=signOut">Signout</a></li>
                                      </div>';
                            } else {
                                echo '<li class="nav-item login"><a class="nav-link" href="../../../index.php?action=login">Admin</a></li>';
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