<?php

namespace App\Articles;
use App\Managers;

class ArticlesManager extends \App\Managers\Manager {

    public function getArticle($article_ID) {
        $article = [];

        $q = $this->dbConnect()->prepare('SELECT art_id, art_title, art_content, url_img, url_video, art_author, DATE_FORMAT(art_modified_date, \'%d/%m/%Y à %Hh%imin%ss\') AS modified_date_fr, DATE_FORMAT(art_creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS date_fr FROM articles WHERE art_id = ?');
        $q->execute(array($article_ID));
        
        while ($data = $q->fetch(\PDO::FETCH_ASSOC)) {
            $article = new Article($data);
        }
        return $article;
    }

    public function addNewsNoImg($art_title, $art_content, $art_author) {
        $q = $this->dbConnect()->prepare('INSERT INTO articles (art_title, art_content, art_author, art_creation_date) VALUES (?, ?, ?, NOW())');
        $articleToAdd = $q->execute(array($art_title, $art_content, $art_author));

        $addedArticle = [];
        $req = $this->dbConnect()->prepare('SELECT art_title, art_content, art_author, art_id, DATE_FORMAT(art_creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS date_fr FROM articles WHERE art_title = ?');
        $req->execute(array($art_title));

        while ($data = $req->fetch(\PDO::FETCH_ASSOC)) {
            $addedArticle = new Article($data);
        }
        return $addedArticle;
    }

    public function addNewsNoVideo($art_title, $art_content, $url_img, $art_author) {
        $q = $this->dbConnect()->prepare('INSERT INTO articles (art_title, art_content, url_img, art_author, art_creation_date) VALUES (?, ?, ?, ?, NOW())');
        $articleToAdd = $q->execute(array($art_title, $art_content, $url_img, $art_author));

        $addedArticle = [];
        $req = $this->dbConnect()->prepare('SELECT art_title, art_content, art_author, url_img, art_id, DATE_FORMAT(art_creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS date_fr FROM articles WHERE art_title = ?');
        $req->execute(array($art_title));

        while ($data = $req->fetch(\PDO::FETCH_ASSOC)) {
            $addedArticle = new Article($data);
        }
        return $addedArticle;
    }

    public function addNewsNoImgNoVideo($art_title, $art_content, $art_author) {
        $q = $this->dbConnect()->prepare('INSERT INTO articles (art_title, art_content, art_author, art_creation_date) VALUES (?, ?, ?, NOW())');
        $articleToAdd = $q->execute(array($art_title, $art_content, $art_author));

        $addedArticle = [];
        $req = $this->dbConnect()->prepare('SELECT art_title, art_content, art_author, art_id, DATE_FORMAT(art_creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS date_fr FROM articles WHERE art_title = ?');
        $req->execute(array($art_title));

        while ($data = $req->fetch(\PDO::FETCH_ASSOC)) {
            $addedArticle = new Article($data);
        }
        return $addedArticle;
    }

    public function addNewsVideo($art_title, $art_content, $url_video, $art_author) {
        $q = $this->dbConnect()->prepare('INSERT INTO articles (art_title, art_content, url_video, art_author, art_creation_date) VALUES (?, ?, ?, ?, NOW())');
        $articleToAdd = $q->execute(array($art_title, $art_content, $url_video, $art_author));

        $addedArticle = [];
        $req = $this->dbConnect()->prepare('SELECT art_title, art_content, url_video, art_author, art_id, DATE_FORMAT(art_creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS date_fr FROM articles WHERE art_title = ?');
        $req->execute(array($art_title));

        while ($data = $req->fetch(\PDO::FETCH_ASSOC)) {
            $addedArticle = new Article($data);
        }
        return $addedArticle;
    }

    public function addNews($art_title, $art_content, $url_img, $url_video, $art_author) {
        $q = $this->dbConnect()->prepare('INSERT INTO articles (art_title, art_content, url_img, url_video, art_author, art_creation_date) VALUES (?, ?, ?, ?, ?, NOW())');
        $articleToAdd = $q->execute(array($art_title, $art_content, $url_img, $url_video, $art_author));

        $addedArticle = [];
        $req = $this->dbConnect()->prepare('SELECT art_title, art_content, url_img, art_author, art_id, DATE_FORMAT(art_creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS date_fr FROM articles WHERE art_title = ?');
        $req->execute(array($art_title));

        while ($data = $req->fetch(\PDO::FETCH_ASSOC)) {
            $addedArticle = new Article($data);
        }
        return $addedArticle;
    }

    public function updateArticleNoImg($art_title, $art_content, $art_id) {
        $q = $this->dbConnect()->prepare('UPDATE articles SET art_title = ?, art_content = ? WHERE art_id = ?');
        $articleToUpdate = $q->execute(array($art_title, $art_content, $art_id));
        return $articleToUpdate;
    }

    public function updateArticleNoVideo($art_title, $art_content, $url_img, $art_id) {
        $q = $this->dbConnect()->prepare('UPDATE articles SET art_title = ?, art_content = ?, url_img = ? WHERE art_id = ?');
        $articleToUpdate = $q->execute(array($art_title, $art_content, $url_img, $art_id));
        return $articleToUpdate;
    }

    public function updateArticleNoImgNoVideo($art_title, $art_content, $art_id) {
        $q = $this->dbConnect()->prepare('UPDATE articles SET art_title = ?, art_content = ? WHERE art_id = ?');
        $articleToUpdate = $q->execute(array($art_title, $art_content, $art_id));
        return $articleToUpdate;
    }

    public function updateArticleVideo($art_title, $art_content, $url_video, $art_id) {
        $q = $this->dbConnect()->prepare('UPDATE articles SET art_title = ?, art_content = ?, url_video = ? WHERE art_id = ?');
        $articleToUpdate = $q->execute(array($art_title, $art_content, $url_video, $art_id));
        return $articleToUpdate;
    }

    public function updateArticle($art_title, $art_content, $url_img, $url_video, $art_id) {
        $q = $this->dbConnect()->prepare('UPDATE articles SET art_title = ?, art_content = ?, url_img = ?, url_video = ? WHERE art_id = ?');
        $articleToUpdate = $q->execute(array($art_title, $art_content, $url_img, $url_video, $art_id));
        return $articleToUpdate;
    }

    public function deleteArticle($article_id) {
        $q = $this->dbConnect()->prepare('DELETE FROM articles WHERE art_id = ?');
        $articleToDelete = $q->execute(array($article_id));
        return $articleToDelete;
    }

    public function listLastArticles() {
        $articles = [];
        $q = $this->dbConnect()->query('SELECT art_id, art_title, art_content, art_author, DATE_FORMAT(art_modified_date, \'%d/%m/%Y à %Hh%imin%ss\') AS modified_date_fr, DATE_FORMAT(art_creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS date_fr FROM articles ORDER BY art_creation_date DESC LIMIT 3');

        while ($data = $q->fetch(\PDO::FETCH_ASSOC)) {
            $articles[] = new Article($data);
        }
        return $articles;
    }

    public function listArticles() {
        $articles = [];
        $q = $this->dbConnect()->query('SELECT art_id, art_title, art_content, url_img, art_author, DATE_FORMAT(art_modified_date, \'%d/%m/%Y à %Hh%imin%ss\') AS modified_date_fr, DATE_FORMAT(art_creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS date_fr FROM articles ORDER BY art_creation_date ASC');

        while ($data = $q->fetch(\PDO::FETCH_ASSOC)) {
            $articles[] = new Article($data);
        }
        return $articles;
    }
}