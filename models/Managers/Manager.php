<?php

namespace App\Managers;

class Manager {

    protected function dbConnect() {
        try {
            include('./config.php');
<<<<<<< HEAD
            $db = new \PDO('mysql:host=' . $localhost . ';dbname=' . $dbName . ';port="" ;charset=utf8' , '' . $loginLocal . '', ''. $pwdLocal . '');
=======
            $db = new \PDO('mysql:host=' . $localhost . ';dbname=' . $dbName . ';port="";charset=utf8' , '' . $loginLocal . '', ''. $pwdLocal . '');
>>>>>>> ccdf36be80b1fdff0c6b6953ba9a51ca97115416
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);
            return $db;
        } catch(Exception $e) {
            $errorMessage = $e->getMessage();
            require('./public/views/frontend/errorView.php');
        }
    }
}