<?php

class EditoraModel {

    protected $table = 'editoras';
    protected $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function insert($nome, $data_fundacao, $data_cri) {
        $stmt = $this->db->prepare("INSERT INTO $this->table (nome, data_fundacao, data_cri) VALUES (:nome, :data_fundacao, :data_cri)");
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":data_fundacao", $data_fundacao);
        $stmt->bindParam(":data_cri", $data_cri);
        $stmt->execute();
        return $this->db->lastInsertId();
    }

    public function update($nome, $data_fundacao, $data_edit, $id_editora) {
        $stmt = $this->db->prepare("UPDATE $this->table SET nome=:nome, data_fundacao=:data_fundacao, data_edit=:data_edit WHERE id_editora=:id_editora");
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":data_fundacao", $data_fundacao);
        $stmt->bindParam(":data_edit", $data_edit);
        $stmt->bindParam(":id_editora", $id_editora);
        $stmt->execute();
    }

    public function delete($id_editora) {
        $stmt = $this->db->prepare("DELETE FROM $this->table WHERE id_editora=:id_editora");
        $stmt->bindParam(":id_editora", $id_editora);
        $stmt->execute();
    }

}
