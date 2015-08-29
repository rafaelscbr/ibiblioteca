<?php

require_once __DIR__ . '/../Model/EditoraModel.php';

class Editora extends EditoraModel {

    private $id_editora;
    private $nome;
    private $data_fundacao;
    private $data_cri;
    private $data_edit;

    function getNome() {
        return $this->nome;
    }

    function getData_fundacao() {
        return $this->data_fundacao;
    }

    function getData_cri() {
        return $this->data_cri;
    }

    function getData_edit() {
        return $this->data_edit;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setData_fundacao($data_fundacao) {
        $this->data_fundacao = $data_fundacao;
    }

    function setData_cri($data_cri) {
        $this->data_cri = $data_cri;
    }

    function setData_edit($data_edit) {
        $this->data_edit = $data_edit;
    }

    public function insert() {
        parent::insert($this->nome, $this->data_fundacao, $this->data_cri);
    }

    public function update($id_editora) {
        parent::update($this->nome, $this->data_fundacao, $this->data_edit, $id_editora);
    }

    public function delete($id_editora) {
        parent::delete($id_editora);
    }

}
