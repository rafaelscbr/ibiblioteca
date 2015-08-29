<?php

require_once __DIR__ . '/../Model/AutorModel.php';

class Autor extends AutorModel {

    private $id_autor;
    private $nome;
    private $sobrenome;
    private $data_nascimento;
    private $data_obito;
    private $data_cri;
    private $data_edit;

    public function getNome() {
        return $this->nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function getData_nascimento() {
        return $this->data_nascimento;
    }

    public function getData_obito() {
        return $this->data_obito;
    }

    public function getData_cri() {
        return $this->data_cri;
    }

    public function getData_edit() {
        return $this->data_edit;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function setData_nascimento($data_nascimento) {
        $this->data_nascimento = $data_nascimento;
    }

    public function setData_obito($data_obito) {
        $this->data_obito = $data_obito;
    }

    public function setData_cri($data_cri) {
        $this->data_cri = $data_cri;
    }

    public function setData_edit($data_edit) {
        $this->data_edit = $data_edit;
    }

    public function insert() {
        parent::insert($this->nome, $this->sobrenome, $this->data_nascimento, $this->data_obito, $this->data_cri);
    }

    public function update($id_autor) {
        parent::update($this->nome, $this->sobrenome, $this->data_nascimento, $this->data_obito, $this->data_edit, $id_autor);
    }

    public function delete($id_autor) {
        parent::delete($id_autor);
    }

}