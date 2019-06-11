<?php
    require('./controllers/frontController.php');
    require('./controllers/adminController.php');

    if (!empty($_GET['action'])) {
        switch ($_GET['action']) {
            case 'displayHome':
                displayHome();
            break;

            case 'displayOnboard':
                displayOnBoard();
            break;

            case 'displayContact':
                displayContact();
            break;
           
            case 'displayNews':
                displayNews();
            break;

            case 'displayAdmin';
                displayAdmin();
            break;

            case 'addNews';
                addNews();
            break;

            default:
                displayHome();
        }
    } else {
        displayHome();
    }


