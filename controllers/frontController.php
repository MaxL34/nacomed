<?php
    require('./vendor/autoload.php');
    
    
    use App\Articles;
    use App\Program;
    use App\Comments;

/* Récupération des commentaires d'une news */
function getArtCom($article_id) {
    try {
        $articlesManager = new App\Articles\ArticlesManager();
        $article = $articlesManager->getArticle($article_id);

        $commentsManager = new App\Comments\CommentsManager();
        $comments = $commentsManager->getComFromArticle($article_id);
        require('./public/views/frontend/newsView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Ajout de commentaires */
function addComment($com_content, $com_author, $article_id) {
    try {
        $commentsManager = new App\Comments\CommentsManager();
        $comment = $commentsManager->addComment($com_content, $com_author, $article_id);

        $articlesManager = new App\Articles\ArticlesManager();
        $article = $articlesManager->getArticle($article_id);

        $comments = $commentsManager->getComFromArticle($article_id);
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Signalement de commentaire */
function reportCom($article_id, $com_id) {
    try {
        $articlesManager = new App\Articles\ArticlesManager();
        $article = $articlesManager->getArticle($article_id);

        $commentsManager = new App\Comments\CommentsManager();
        $comments = $commentsManager->getComFromArticle($article_id);

        $reportedCom = $commentsManager->reportComment($com_id);
        require('./public/views/frontend/newsView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

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
        /*$prog_jan = $progManager->getProg_jan();
        $prog_feb = $progManager->getProg_feb();
        $prog_mar = $progManager->getProg_mar();
        $prog_apr = $progManager->getProg_apr();
        $prog_may = $progManager->getProg_may();
        $prog_jun = $progManager->getProg_jun();
        $prog_jul = $progManager->getProg_jul();
        $prog_aug = $progManager->getProg_aug();
        $prog_sep = $progManager->getProg_sep();
        $prog_oct = $progManager->getProg_oct();
        $prog_nov = $progManager->getProg_nov();
        $prog_dec = $progManager->getProg_dec();*/

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

/* Affichage de la page des articles (news) */
function displayNews() {
    try {
        $articlesManager = new App\Articles\ArticlesManager();    
        $articles = $articlesManager->listArticles();
        require('./public/views/frontend/articles.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Page contact */
function displayContact() {
    require('./public/views/frontend/contact.php');
}

/* Page nous soutenir */
function displaySupport() {
    require('./public/views/frontend/supportUsView.php');
}