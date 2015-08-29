<?php

class AutorModel {

    protected $db;
    protected $table = 'autores';

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function insert($nome, $sobrenome, $data_nascimento, $data_obito, $data_cri) {
        $stmt = $this->db->prepare("INSERT INTO $this->table (nome, sobrenome, data_nascimento, data_obito, data_cri) VALUES(:nome, :sobrenome, :data_nascimento, :data_obito, :data_cri)");
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":sobrenome", $sobrenome);
        $stmt->bindParam(":data_nascimento", $data_nascimento);
        $stmt->bindParam(":data_obito", $data_obito);
        $stmt->bindParam(":data_cri", $data_cri);
        $stmt->execute();
        return $this->db->lastInsertId();
    }

    public function update($nome, $sobrenome, $data_nascimento, $data_obito, $data_edit, $id_autor) {
        $stmt = $this->db->prepare("UPDATE $this->table SET nome=:nome, sobrenome=:sobrenome, data_nascimento=:data_nascimento, data_obito=:data_obito, data_edit=:data_edit WHERE id_autor=:id_autor");
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":sobrenome", $sobrenome);
        $stmt->bindParam(":data_nascimento", $data_nascimento);
        $stmt->bindParam(":data_obito", $data_obito);
        $stmt->bindParam(":data_edit", $data_edit);
        $stmt->bindParam(":id_autor", $id_autor);
        $stmt->execute();
    }

    public function delete($id_autor) {
        $stmt = $this->db->prepare("DELETE FROM $this->table WHERE id_autor=:id_autor");
        $stmt->bindParam(":id_autor", $id_autor);
        $stmt->execute();
    }

}