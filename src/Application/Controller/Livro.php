<?php

require_once __DIR__ . '/../Model/LivroModel.php';

class Livro extends LivroModel {

    private $id_livros;
    private $titulo;
    private $descricao;
    private $categoria;
    private $autor;
    private $editora;
    private $data_lancamento;
    private $data_cri;
    private $data_edit;

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
        parent::insert($this->titulo, $this->descricao, $this->categoria, $this->autor, $this->editora, $this->data_lancamento, $this->data_cri);
    }

    public function update($id_livro) {
        parent::update($this->titulo, $this->descricao, $this->categoria, $this->autor, $this->editora, $this->data_lancamento, $this->data_edit, $id_livro);
    }

    public function delete($id_livro) {
        parent::delete($id_livro);
    }

}