<?php
    
    use App\Program;
    use App\Comments;

/* Fonction de Program */

function displayOnBoard() {
    try {
        $progManager = new App\Program\ProgramManager();
        
        $month_prog = [
            "JANVIER" => $progManager->getProg_jan(),
            "FEVRIER" => $progManager->getProg_feb(),
            "MARS" => $progManager->getProg_mar(),
            "AVRIL" => $progManager->getProg_apr(),
            "MAI" => $progManager->getProg_may(),
            "JUIN" => $progManager->getProg_jun(),
            "JUILLET" => $progManager->getProg_jul(),
            "AOUT" => $progManager->getProg_aug(),
            "SEPTEMBRE" => $progManager->getProg_sep(),
            "OCTOBRE" => $progManager->getProg_oct(),
            "NOVEMBRE" => $progManager->getProg_nov(),
            "DECEMBRE" => $progManager->getProg_dec() 
        ];

        $mapManager = new App\Map\MapManager();
        $mapEvents = $mapManager->displayEvents();
        require('./public/views/frontend/onboard.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}


/* Fonctions d'affichage simple */

/* Accueil */
function displayHome() {
    require('./public/views/frontend/home.php');
}

/* Page sciences */
function displaySciences() {
    require('./public/views/frontend/sciences.php');
}

/* Page contact */
function displayContact() {
    require('./public/views/frontend/contact.php');
}

/* Page nous soutenir */
function displaySupport() {
    require('./public/views/frontend/supportUsView.php');
}

/* Mentions légales */
function displayMentions() {
    require('./public/views/frontend/mentionsLegales.php');
}