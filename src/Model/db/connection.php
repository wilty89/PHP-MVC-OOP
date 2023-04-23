<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'login_mysqli');

define('URL_ROOT', 'http://localhost/login-mysqli/');
define('APP_NAME', 'Simple Login System');
    /**
    * Database Connection
    */
    class DbConnect {
        private $server = DB_HOST;
        private $dbname = DB_NAME;
        private $user = DB_USER;
        private $pass = '';
        public function connect() {
            try {
                $conn = new PDO('mysql:host=' .$this->server .';dbname=' . $this->dbname, $this->user, $this->pass);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
            } catch (\Exception $e) {
                echo "Database Error: " . $e->getMessage();
            }
        }

    }
?>