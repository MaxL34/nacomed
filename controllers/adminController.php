<?php

    use App\Program;
    use App\Comments;
    use App\Map;
    use App\Users;

/* Ajouter un évènement sur la map */
function addEvent($name, $lat, $lng, $date, $com) {
    try {
        $mapManager = new App\Map\MapManager();
        $eventToAdd = $mapManager->addEvent($name, $lat, $lng, $date, $com);
        require('./public/views/backend/mapManagementView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Récupérer tous les évènements sur la map */
function displayMapEvents() {
    try {
        $mapManager = new App\Map\MapManager();
        $mapEvents = $mapManager->displayEvents();
        require('./public/views/backend/mapEventsView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Afficher un évènement que l'on va mettre à jour */
function displayEventUpdateView($id) {
    try {
        $mapManager = new App\Map\MapManager();
        $event = $mapManager->displayEditedEvent($id);
        require('./public/views/backend/eventUpdateView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Mettre à jour un évènement */
function updateEvent($name, $lat, $lng, $date, $com, $id) {
    try {
        $mapManager = new App\Map\MapManager();
        $eventToUpdate = $mapManager->updateEvent($name, $lat, $lng, $date, $com, $id);
        require('./public/views/backend/eventUpdateView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Supprimer un évènement */
function deleteEvent($id) {
    try {
        $mapManager = new App\Map\MapManager();
        $eventToDel = $mapManager->deleteEvent($id);
        return $eventToDel;
        require('./public/views/backend/mapEventsView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Ajouter les informations de programme du navire pour janvier */
function addProgJanInfos($mission, $details_mission, $location, $available_beds, $comments, $week) {
    try {
        $progManager = new App\Program\ProgramManager();
        $progManager->addProgJan($mission, $details_mission, $location, $available_beds, $comments, $week);
        require('./public/views/backend/programManagementView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Ajouter les information de programme du navire pour février */
function addProgFebInfos($mission, $details_mission, $location, $available_beds, $comments, $week) {
    try {
        $progManager = new App\Program\ProgramManager();
        $progManager->addProgFeb($mission, $details_mission, $location, $available_beds, $comments, $week);
        require('./public/views/backend/programManagementView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Ajouter ... pour mars */
function addProgMarInfos($mission, $details_mission, $location, $available_beds, $comments, $week) {
    try {
        $progManager = new App\Program\ProgramManager();
        $progManager->addProgMar($mission, $details_mission, $location, $available_beds, $comments, $week);
        require('./public/views/backend/programManagementView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Ajouter ... pour avril */
function addProgAprInfos($mission, $details_mission, $location, $available_beds, $comments, $week) {
    try {
        $progManager = new App\Program\ProgramManager();
        $progManager->addProgApr($mission, $details_mission, $location, $available_beds, $comments, $week);
        require('./public/views/backend/programManagementView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Ajouter ... pour mai */
function addProgMayInfos($mission, $details_mission, $location, $available_beds, $comments, $week) {
    try {
        $progManager = new App\Program\ProgramManager();
        $progManager->addProgMay($mission, $details_mission, $location, $available_beds, $comments, $week);
        require('./public/views/backend/programManagementView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Ajouter ... pour juin */
function addProgJunInfos($mission, $details_mission, $location, $available_beds, $comments, $week) {
    try {
        $progManager = new App\Program\ProgramManager();
        $progManager->addProgJun($mission, $details_mission, $location, $available_beds, $comments, $week);
        require('./public/views/backend/programManagementView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Ajouter ... pour juillet */
function addProgJulInfos($mission, $details_mission, $location, $available_beds, $comments, $week) {
    try {
        $progManager = new App\Program\ProgramManager();
        $progManager->addProgJul($mission, $details_mission, $location, $available_beds, $comments, $week);
        require('./public/views/backend/programManagementView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* AJouter ... pour aout */
function addProgAugInfos($mission, $details_mission, $location, $available_beds, $comments, $week) {
    try {
        $progManager = new App\Program\ProgramManager();
        $progManager->addProgAug($mission, $details_mission, $location, $available_beds, $comments, $week);
        require('./public/views/backend/programManagementView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Ajouter ... pour septembre */
function addProgSepInfos($mission, $details_mission, $location, $available_beds, $comments, $week) {
    try {
        $progManager = new App\Program\ProgramManager();
        $progManager->addProgSep($mission, $details_mission, $location, $available_beds, $comments, $week);
        require('./public/views/backend/programManagementView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Ajouter ... pour octobre */
function addProgOctInfos($mission, $details_mission, $location, $available_beds, $comments, $week) {
    try {
        $progManager = new App\Program\ProgramManager();
        $progManager->addProgOct($mission, $details_mission, $location, $available_beds, $comments, $week);
        require('./public/views/backend/programManagementView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Ajouter ... pour novembre */
function addProgNovInfos($mission, $details_mission, $location, $available_beds, $comments, $week) {
    try {
        $progManager = new App\Program\ProgramManager();
        $progManager->addProgNov($mission, $details_mission, $location, $available_beds, $comments, $week);
        require('./public/views/backend/programManagementView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Ajouter ... pour décembre */
function addProgDecInfos($mission, $details_mission, $location, $available_beds, $comments, $week) {
    try {
        $progManager = new App\Program\ProgramManager();
        $progManager->addProgDec($mission, $details_mission, $location, $available_beds, $comments, $week);
        require('./public/views/backend/programManagementView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Afficher les infos du programme pour une semaine donnée */

function listProgInfos($month, $week) {
    try {
        $progManager = new App\Program\ProgramManager();
        $prog = $progManager->getProg_week($month, $week);
        echo json_encode($prog);
        return;
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Supprimer les infos du programme pour une semaine donnée */

function delProg($month, $week) {
    try {
        $progManager = new App\Program\ProgramManager();
        $prog = $progManager->delProg_week($month, $week);
        return $prog;
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Connexion de l'admin */
function logUser($login, $password) {
    try {
        $usersManager = new App\Users\UsersManager();
        $userToLog = $usersManager->logUser($login, $password);
        return $userToLog; 
        require('./public/views/backend/adminView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Afficher la page de login */
function displayLoginView() {
    require('./public/views/backend/loginView.php');
}

/* Afficher le tableau de bord admin */
function displayAdmin() {
    require('./public/views/backend/adminView.php');
}

/* Afficher le tableau de bord de gestion de la map */
function displayMgmtMap() {
    require('./public/views/backend/mapManagementView.php');
}

/* Afficher le tableau de bord de gestion de programme du navire */
function displayProgMgmt() {
    require('./public/views/backend/programManagementView.php');
}