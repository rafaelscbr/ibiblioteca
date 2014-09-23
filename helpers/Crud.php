<?php

abstract class Crud {

    protected $db;
    protected $table;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    abstract public function insert();

    public function delete($id) {
        $stmt = $this->db->prepare('DELETE FROM' . $this->table . 'WHERE ID=' . $id . ' ');
        return $stmt->execute();
    }
    


}
