<?php

class db extends PDO {

    private $dsn = 'mysql:dbname=ibiblioteca;host=127.0.0.1';
    private $user = 'root';
    private $password = 'root';

    public function __construct() {
        try {
            $db = parent::__construct($this->dsn, $this->user, $this->password);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            return false;
        }
    }

}
