<?php

require_once  __DIR__ . '/../config/conexao.php';
require_once 'Crud.php';

class Livro extends Crud {

    private $id_livros;
    private $titulo;
    private $descricao;
    private $categoria;
    private $autor;
    private $editora;
    private $data_lancamento;
    private $data_cri;
    private $data_edit;
    protected $table = 'livros';

    function getData_cri() {
        return $this->data_cri;
    }

    function getData_edit() {
        return $this->data_edit;
    }

    function setData_cri($data_cri) {
        $this->data_cri = $data_cri;
    }

    function setData_edit($data_edit) {
        $this->data_edit = $data_edit;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getAutor() {
        return $this->autor;
    }

    function getEditora() {
        return $this->editora;
    }

    function getData_lancamento() {
        return $this->data_lancamento;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setEditora($editora) {
        $this->editora = $editora;
    }

    function setData_lancamento($data_lancamento) {
        $this->data_lancamento = $data_lancamento;
    }

    public function insert() {
        $stmt = $this->db->prepare("INSERT INTO  $this->table (titulo, descricao, categoria, autor, editora, data_lancamento, data_cri) VALUES (:titulo, :descricao, :categoria, :autor, :editora, :data_lancamento, :data_cri)");
        $stmt->bindParam(":titulo", $this->titulo);
        $stmt->bindParam(":descricao", $this->descricao);
        $stmt->bindParam(":categoria", $this->categoria);
        $stmt->bindParam(":autor", $this->autor);
        $stmt->bindParam(":editora", $this->editora);
        $stmt->bindParam(":data_lancamento", $this->data_lancamento);
        $stmt->bindParam(":data_cri", $this->data_cri);
        $stmt->execute();
        return $this->db->lastInsertId();
    }

    public function update($id_livro) {
        $stmt = $this->db->prepare("UPDATE $this->table SET titulo=:titulo, descricao=:descricao, categoria=:categoria, autor=:autor, editora=:editora, data_lancamento=:data_lancamento, data_edit=:data_edit WHERE id_livros=:id_livros");
        $stmt->bindParam(":titulo", $this->titulo);
        $stmt->bindParam(":descricao", $this->descricao);
        $stmt->bindParam(":categoria", $this->categoria);
        $stmt->bindParam(":autor", $this->autor);
        $stmt->bindParam(":editora", $this->editora);
        $stmt->bindParam(":data_lancamento", $this->data_lancamento);
        $stmt->bindParam(":data_edit", $this->data_edit);
        $stmt->bindParam(":id_livros", $id_livro);
        $stmt->execute();
    }

    public function delete($id_livro) {
        $stmt = $this->db->prepare("DELETE FROM $this->table WHERE id_autor=:id_livros");
        $stmt->bindParam(":id_livros", $id_livro);
        $stmt->execute();
    }

}