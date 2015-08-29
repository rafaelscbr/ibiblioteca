<?php

class LivroModel {

    protected $table = 'livros';
    protected $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function insert($titulo, $descricao, $categoria, $autor, $editora, $data_lancamento, $data_cri) {
        $stmt = $this->db->prepare("INSERT INTO  $this->table (titulo, descricao, categoria, autor, editora, data_lancamento, data_cri) VALUES (:titulo, :descricao, :categoria, :autor, :editora, :data_lancamento, :data_cri)");
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":descricao", $descricao);
        $stmt->bindParam(":categoria", $categoria);
        $stmt->bindParam(":autor", $autor);
        $stmt->bindParam(":editora", $editora);
        $stmt->bindParam(":data_lancamento", $data_lancamento);
        $stmt->bindParam(":data_cri", $data_cri);
        $stmt->execute();
        return $this->db->lastInsertId();
    }

    public function update($titulo, $descricao, $categoria, $autor, $editora, $data_lancamento, $data_edit, $id_livro) {
        $stmt = $this->db->prepare("UPDATE $this->table SET titulo=:titulo, descricao=:descricao, categoria=:categoria, autor=:autor, editora=:editora, data_lancamento=:data_lancamento, data_edit=:data_edit WHERE id_livros=:id_livros");
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":descricao", $descricao);
        $stmt->bindParam(":categoria", $categoria);
        $stmt->bindParam(":autor", $autor);
        $stmt->bindParam(":editora", $editora);
        $stmt->bindParam(":data_lancamento", $data_lancamento);
        $stmt->bindParam(":data_edit", $data_edit);
        $stmt->bindParam(":id_livros", $id_livro);
        $stmt->execute();
    }

    public function delete($id_livro) {
        $stmt = $this->db->prepare("DELETE FROM $this->table WHERE id_livros=:id_livros");
        $stmt->bindParam(":id_livros", $id_livro);
        $stmt->execute();
    }

}