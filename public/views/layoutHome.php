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
        <title>Association Nacomed : Accueil</title>
        <meta name="description" content="Page d'accueil du site de l'association Nacomed">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">
        <!-- Google fonts-->
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo:400,400i">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700"> -->
        <!-- OwlCarousel -->
        <link rel="stylesheet" href="./vendor/owl.carousel/assets/owl.carousel.css">
        <link rel="stylesheet" href="./vendor/owl.carousel/assets/owl.theme.default.min.css">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="./css/style.blue.min.css" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="./css/custom.min.css">
        <!-- Favicon-->
        <link rel="shortcut icon" href="./img/logo_nacomed_resized.webp">
        <!-- Open Graph Data Facebook -->
        <meta property="og:title" content="Page d'accueil de l'association Nacomed" />
        <meta property="og:description" content="<?= $og_title; ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://www.nacomed.fr" />
        <meta property="og:image" content="https://zupimages.net/up/20/05/nxfx.png" />
        <meta property="og:image:alt" content="Logo de l'association Nacomed" />
        <!-- Lightbox CSS -->
        <link rel="stylesheet" href="./vendor/lightbox2/css/lightbox.css">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142576167-1"></script>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-TM9HPZH');
        </script>
        <!-- End Google Tag Manager -->
        
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>

    <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TM9HPZH"
        height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container home-navbar">
                <a class="logo navbar-brand" href="./index.php"><img class="logo-nacomed" src="./img/logo_nacomed.webp" alt="logo de nacomed" /></a>
                    <button class="menu_btn navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                        <i class="fas fa-bars"></i>
                    </button>
          
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php?action=displayOnboard">Embarquement</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link support-link" href="./index.php?action=displaySupport">Nous soutenir</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php?action=displayContact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link adhesion-link" target="_blank" href="https://www.helloasso.com/associations/nacomed/adhesions/bulletin-d-adhesion-a-nacomed">Adhérer</a>
                        </li>

                        <?php
                            if (isset($_SESSION['user'])) {
                                $sessionUser = $_SESSION['user'];
                                echo '<li class="nav-item admin-link"><a class="nav-link" href="./index.php?action=displayAdmin">Administration</a></li>';
                                echo '<li class="nav-item logout"><a id ="signOut_link" class="nav-link" href="./index.php?action=signOut">Déconnexion</a></li>';
                            } else {
                                echo '<li class="nav-item login"><a class="nav-link" href="./index.php?action=login">Connexion</a></li>';
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>

        <?= $content ?>

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
        <script src="./vendor/owl.carousel/owl.carousel.js"></script>
        <script src="./vendor/onepage-scroll/jquery.onepage-scroll.js"></script>
        <script src="./vendor/lightbox2/js/lightbox.js"></script>
        <script src="./js/controllers/main.js"></script>
    </body>
</html>