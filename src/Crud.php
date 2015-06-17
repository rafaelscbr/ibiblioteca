<?php

abstract class Crud {

    protected $db;
    protected $table;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function fetchAll() {
        $stmt = $this->db->prepare("SELECT * FROM $this->table");
        $stmt->execute();

        return $stmt->fetchAll();
    }

}
