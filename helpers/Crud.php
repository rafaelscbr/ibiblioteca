<?php

abstract class Crud {

    protected $db;
    protected $table;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    abstract public function insert();    


}
