<?php ob_start(); ?>

<div class="main">
    <section class="bg-cover bg-center hero" id="home1">
        <nav class="pagination-nav">
            <ul class="onepage-pagination">
                <a href="#home1" class="scroll" data-index="1">
                    <span id="accueil">Accueil</span>
                    <li class="home-1"></li>
                </a>
                <a href="#about2" class="scroll" data-index="2">
                    <span id="about">Présentation</span>
                    <li class="about-2"></li>
                </a>
                <a href="#boat3" class="scroll" data-index="3">
                    <span id="boat">Le navire</span>
                    <li class="boat-3"></li>
                </a>
                <!-- <a href="#specs_boat4" class="scroll" data-index="4">
                    <span id="specs_boat">Le navire en détails</span>
                    <li class="specs_boat-4"></li>
                </a> -->
                <a href="#contact5" class="scroll" data-index="5">
                    <span id="contact">L'équipe</span>
                    <li class="contact-5"></li>
                </a>
                
            </ul>
        </nav>

        <div class="position-relative z-index-1">
            <div class="container welcome text-center text-white">
                <p class="font-italic lead">Bienvenue sur le site de</p>
                <h1 class="text-uppercase my-4">NACOMED</h1>
                <h2>Navires d'&Eacute;tudes Corse Méditerranée</h2>
                <p class="font-italic lead">Convaincu que pour une mer plus sûre et plus propre, la bonne volonté doit être accompagnée de connaissances du milieu et de compétences de
                                            marin ; Nacomed met à disposition une flotte de navires écoles à vocation écologique, pour tous et au service des sciences de la mer.
                </p>
            </div>

            <div class="nav_infos text-white col-lg-4">
                <span class="asso_info"><i class="fas fa-angle-double-right"></i>Navigation éco-responsable</span>
                <span class="asso_info"><i class="fas fa-angle-double-right"></i>Apprendre en naviguant</span>
                <span class="asso_info"><i class="fas fa-angle-double-right"></i>Accomplir des missions scientifiques</span>
                <span class="asso_info"><i class="fas fa-angle-double-right"></i>Partager son savoir</span>
            </div>

        </div>

        <div class="scroll-btn link-scroll"><i class="fas fa-angle-down"></i></div>
    </section>
    <section class="scrollable" id="about2">
        <div class="d-flex h-100">
            <div class="container about_div">
                <header class="text-center mb-5">
                    <h2 class="text-uppercase lined">Nos Objectifs</h2>
                </header>

                <div class="row">
                    <div class="col-lg-5 science-boat">
                        <header class="text-center">
                            <h3 class="text-uppercase">Un navire scientifique</h3>
                                <p class="lined">&Eacute;tudier le milieu marin</p>
                        </header>
                            <div class="boat-info"><img src="/img/icons/microscope.png" alt="microscope"><p class="about-title short-p">Accueillir des missions scientifiques</p></div>
                            <div class="boat-info"><div><img src="/img/icons/line-graph.png" alt="graphique"></div><p class="about-title short-p">Effectuer des relevés en autonomie (plancton, microplastique, accoustique)</p></div>
                            <div class="boat-info"><img src="/img/icons/seaweed.png" alt="plancton"><p class="about-title short-p">S'intégrer à des programmes de recherches</p></div>
                            <div class="boat-info"><div><img src="/img/icons/dolphin.png" alt="poisson"></div><p class="about-title short-p">Participer aux réseaux de sciences participatives en mer (OBSenMER, ...)</p></div>
                    </div>
                    <div class="col-lg-2 logo-div"><img src="./img/logo_nacomed.png" alt="logo de nacomed" class="img-fluid rounded-circle d-block mx-auto about-logo"></div>
                    <div class="col-lg-5 ecology-boat">
                        <header class="text-center">
                            <h3 class="text-uppercase">Un navire écologique</h3>
                            <p class="lined">Préserver et sensibiliser</p>
                        </header>
                            <div class="boat-info"><img src="/img/icons/compass.png" alt="boussole"><p class="about-title short-p">Naviguer et s’avitailler de manière éco-responsable</p></div>
                            <div class="boat-info"><img src="/img/icons/atom.png" alt="atome"><p class="about-title short-p">Développer l’autonomie du navire grâce aux low-techs</p></div>
                            <div class="boat-info"><div><img src="/img/icons/promotion.png" alt="mega-phone"></div><p class="about-title"> Mener des actions de sensibilisation auprès des plaisanciers, des plagistes, des écoliers et étudiants, et du grand public</p></div>
                            <div class="boat-info"><img src="/img/icons/recycle-sign.png" alt="logo de recyclage"><p class="about-title short-p">Effectuer des dépollutions et nettoyages</p></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 school-boat">
                        <header class="text-center">
                            <h3 class="text-uppercase lined">UN NAVIRE &Eacute;COLE</h3>
                        </header>
                        <div class="row">
                            <div class="text-center school-boat-text col-lg-12">
                                <h5>Pas de passagers ! Que des équipiers !</h5>
                                    <p>Il est important de pouvoir transmettre ses connaissances du milieu à tous ceux qui souhaitent passer du temps en mer ; pour l’apprécier
                                        et la respecter.
                                    </p>
                            </div>
                            <div class="text-center school-boat-text col-lg-12">
                                <h5>Tous les niveaux sont acceptés !</h5>
                                    <p><strong>Les éco-marins</strong> (du débutant curieux à l’amateur confirmé) se joindront au bord pour découvrir, apprendre, se perfectionner 
                                    et s’affirmer.<br><br>
                                    <strong>Les futurs marins</strong> professionnels (capitaines et lieutenants 200 UMS) pourront apprendre leur métier en mer en participant 
                                    à toutes les tâches du bord et en se responsabilisant. Avec un rôle d’équipage ils auront la possibilité de valider leur temps de mer 
                                    à bord auprès de la DIRM afin de les accompagner dans leur cursus d’étudiant. L’objectif est de former des personnes qualifiées et 
                                    écoresponsables pour rendre la mer plus sûre et la préserver ; cela grâce à des navigations encadrées sur un navire spécialisé. 
                                    Ils sont les futurs acteurs du milieu maritime !
                                    </p>
                            </div>
                            <div class="text-center school-boat-text col-lg-12">    
                                <h5>Partager nos connaissances et nos expériences, une priorité !</h5>
                                    <p>La bonne ambiance à bord est essentielle, et nous entretiendrons un échange permanent et convivial entre tous les membres du navire, afin
                                        que chacun puisse apporter ses compétences et ses savoirs pour l’enrichissement personnel et le bon déroulement de chacune 
                                        des missions.<br><br>
                                        Nous interagissons avec d’autres associations corses portées sur la protection du milieu marin, et nous continuerons à développer ces relations 
                                        jusqu’aux autres associations méditerranéennes.<br><br>
                                        Enfin, notre voilier et son équipage seront toujours ouverts à l’échange et l'entraide sur tous ces sujets que sont aujourd’hui les enjeux
                                        environnementaux et maritimes de méditerranée. Alors contactez-nous !
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gray scrollable" id="boat3">
        <div class="d-flex h-100">
            <div class="container">
                <header class="text-center mb-5">
                    <h2 class="text-uppercase lined">Le Yaka</h2>
                </header>
                
                <div class="carousel">
                    <div id="owl-yaka" class="owl-carousel owl-theme">
                        <img class="owl-lazy" data-src="./img/yaka/yaka_exterieur2.jpg" src="./img/yaka/yaka_exterieur2.jpg" alt="Vue profil gauche du Yaka">
                        <img class="owl-lazy" data-src="./img/yaka/yaka_exterieur.jpeg" src="./img/yaka/yaka_exterieur.jpeg" alt="Vue 3/4 profil gauche du Yaka">
                        <img class="owl-lazy" data-src="./img/yaka/yaka2.jpeg" src="./img/yaka/yaka2.jpeg" alt="Vue sur la gouverne depuis le carré intérieur">
                        <img class="owl-lazy" data-src="./img/yaka/yaka_mat.jpeg" src="./img/yaka/yaka_mat.jpeg" alt="Vue sur le mât">
                        <img class="owl-lazy" data-src="./img/yaka/yaka_carre_interieur.jpeg" src="./img/yaka/yaka_carre_interieur.jpeg" alt="Vue du carré intérieur (table et banquette)">
                        <img class="owl-lazy" data-src="./img/yaka/yaka_banette_double.jpeg" src="./img/yaka/yaka_banette_double.jpeg" alt="Vue sur la banette double">
                        <img class="owl-lazy" data-src="./img/yaka/yaka_banettes_superposees.jpeg" src="./img/yaka/yaka_banette_double.jpeg" alt="Vue sur les banettes superposées">
                    </div>
                </div>   
            </div>
        </div>
    </section>   
    <section class="scrollable" id="contact5">
        <div class="h-100">
            <div class="container">
                <header class="text-center mb-5">
                    <h2 class="text-uppercase lined">L'&Eacute;QUIPE</h2>
                </header>
                <div class="row">
                    <div class="contact-logo-div col-lg-12"><img src="./img/logo_nacomed.png" alt="logo de nacomed" class="img-fluid rounded-circle d-block mx-auto contact-logo"></div>
                </div>
                <div class="team-content">
                    <div class="row team-row">
                        <div class="text-center person_pic">
                            <img  class="pic" src="./img/Team/cyrille_resized.png" alt="portrait de Cyrille Lorenzi, fondateur de nacomed"><br>
                            <span>Cyrille Lorenzi</span><br>
                            <span>Fondateur et Capitaine</span><br>
                            <span>Tél : 06 41 25 99 31 / 06 09 09 17 91</span><br>
                            <span>Mails : <a href="mailto:nacomed@nacomed.fr">nacomed@nacomed.fr</a></span>
                        </div>

                        <div class="text-center person_pic">
                            <img class="pic" src="./img/Team/Pauline_Panchairi.png" alt="portrait de Pauline Panchairi, développement projets scientifiques"><br>
                            <span>Pauline Panchairi</span><br>
                            <span>Développement projets scientifiques</span><br>
                            <span>Tél : 06 70 96 25 73</span><br>
                            <span>Mail : <a href="mailto:ecosciences@nacomed.fr">ecosciences@nacomed.fr</a></span>
                        </div>

                        <div class="text-center person_pic">
                            <img src="./img/Team/Jean_Reynaud.png" alt="portrait de Jean Reynaud, développement projets scientifiques"><br>
                            <span>Jean Reynaud</span><br>
                            <span>Développement projets scientifiques</span><br>
                            <span>Tél : 06 20 46 30 57</span><br>
                            <span>Mail : <a href="mailto:ecosciences@nacomed.fr">ecosciences@nacomed.fr</a></span>
                        </div>
                    </div>

                    <div class="row team-row2">
                        <div class="text-center person_pic">
                            <img class="pic" src="./img/Team/Aude_Fromy.png" alt="portrait d'Aude Fromy, gestion de la logistique"><br>
                            <span>Aude Fromy</span><br>
                            <span>Gestion de la logistique</span><br>
                            <span>Tél : 06 03 57 15 87</span><br>
                            <span>Mail : <a href="mailto:avitaillement@nacomed.fr">avitaillement@nacomed.fr</a></span>
                        </div>

                        <div class="text-center person_pic">
                            <img class="pic" src="./img/Team/max_resized.png" alt="portrait de Maxime Lauvergeat, développement web"><br>
                            <span>Maxime Lauvergeat</span><br>
                            <span>Développement du site web</span><br>
                            <span>Tél : 06 75 49 73 74</span><br>
                            <span>Mail : <a href="mailto:mlauvergeat@gmail.com">mlauvergeat@gmail.com</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="page-footer font-small home-footer special-color-dark pt-4">

        <!-- Footer Elements -->
        <div class="container">

            <!-- Social buttons -->
            <ul class="list-unstyled list-inline text-center">
                <li class="list-inline-item">
                    <a href="https://www.facebook.com/nacomed.fr/" target="_blank" class="btn-floating btn-fb mx-1">
                        <img src="./img/icons/social_medias/facebook.png">
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="https://www.instagram.com/_nacomed_/" target="_blank" class="btn-floating btn-fb mx-1">
                        <img src="./img/icons/social_medias/instagram.png">
                    </a>
                </li>
            </ul>
            <!-- Social buttons -->
            
            <!-- Footer Elements -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2019 Copyright :
                <a href="./index.php?action=displayContact"> NACOMED</a>
                <a href="./index.php?action=displayMentions">Mentions légales</a></br>
                Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </section>
</div>
    
<?php $content = ob_get_clean(); ?>
<?php require('public/views/layoutHome.php'); ?>