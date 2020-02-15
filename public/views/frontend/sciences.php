<?php $title = 'Association Nacomed : Sciences'; ?>
<?php $meta_description = 'Informations sur les programmes scientifiques de Nacomed'; ?>
<?php $og_title = 'Informations des programmes scientifiques de Nacomed'; ?>

<!-- Open Graph Data Facebook -->
<meta property="og:title" content="Association Nacomed : Sciences" />
<meta property="og:description" content="Informations sur les programmes scientifiques de Nacomed" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://www.nacomed.fr/index.php?action=displaySciences" />
<meta property="og:image" content="https://zupimages.net/up/20/05/nxfx.png" />
<meta property="og:image:alt" content="Logo de l'association Nacomed" />

<?php ob_start(); ?>

<div class="infos-sciences">
    <header id ="header" class="text-center">
        <h1 class="siences-title">Pas de culture maritime sans connaissance du monde marin !</h1>
    </header>

    <div class="container">
        <div class="row intro-sciences-text">
            <div class="col-lg-12">
                <p>
                Nous protégeons toujours mieux ce que nous comprenons, c’est pourquoi NACOMED souhaite au travers de différents projets scientifiques apporter son soutien à 
                l’étude des écosystèmes marins de Méditerranée. Milieu dynamique, constamment en changement, l’océan couvre 71% de notre planète, et joue un rôle clé et central 
                dans la régulation de notre climat. Toutefois, de nombreux processus, espèces et habitats marins restent méconnus, incompris ou inconnus.<br><br>

                Afin de stimuler l’avancée de nos connaissances et notre reconnaissance du monde marin, NACOMED développe ses projets scientifiques en collaboration avec 
                différents organismes et met à disposition ses navires et équipages pour le recueil de données en mer. Et parce que la communauté scientifique n’est pas la seule
                 à pouvoir découvrir et agir, NACOMED pratique différents programmes de sciences participatives en mer au travers de ses projets scientifiques grâce à ses navires
                et éco-marins, avec pour objectif d’aider à leur développement et leur diffusion.<br><br>

                Nos projets scientifiques, nos partenariats, nos évènements et actions organisés autour des sciences marines et de l’éducation à l’environnement permettront de
                mettre en lumière les richesses de l’océan, leur fragilité, ainsi que les capacités que nous avons pour les préserver.
                </p>
            </div>
        </div>

        <div class="row sciences-prog">
            <h2 class="sc-prog-title text-center">
                Pour le programme 2020, NACOMED porte ses propres projets :
            </h2>
            
            <div class="row prog-list">
                <div class="col-lg-12">
                    <ul>
                        <li>Corsee, Observations cétacés et Tortues dans le sanctuaire Pelagos.</li>
                        <li>ECHO, Cap sur les sciences participatives autour de la Corse, de tour génoise en tour génoise.</li>
                        <li>PIM-POC : Partage d’initiatives pour un mouillage positif en Corse.</li>
                    </ul>
                </div>
            </div>

            <h2 class="sc-prog2-title text-center">
                Et collabore sur les missions d’autres associations :
            </h2>

            <div class="row prog-list">
                <div class="col-lg-12">
                    <ul>
                        <li>Mission CorSeaCare 2020, avec l’association Mare Vivu sur un mois de mission autour de la Corse.</li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 prog-pdf-section text-center">
                    <p class="invite-text">
                    NACOMED offre également à la communauté scientifique la disponibilité de notre voilier et nos compétences maritimes pour la préparation et la conduite 
                    d’expéditions scientifiques à la demande, contactez-nous !
                    </p>

                    <p class="sc-pdf-text text-center">Retrouvez ci-joint les projets en détails</p>
                    <div class="prog-pdf-div">
                        <a class="sc-prog-link" href="./public/pdf/prog_sc_2020_mail.pdf" target="_blank">
                            <img class="sc-prog-img" src="../../img/prog-sc-2020-resized.png"><br>
                            <span class="link-help">(cliquez sur l'image)</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>
<?php require('public/views/layoutFront.php'); ?>

<!-- JavaScript files -->
<script src="./js/activeLinks/sciencesActiveLink.js"></script>