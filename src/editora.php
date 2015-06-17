<?php

require_once  __DIR__ . '/../config/conexao.php';
require_once 'Crud.php';

class Editora extends Crud {

    private $id_editora;
    private $nome;
    private $data_fundacao;
    private $data_cri;
    private $data_edit;
    protected $table = 'editoras';

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
        $stmt = $this->db->prepare("INSERT INTO $this->table (nome, data_fundacao, data_cri) VALUES (:nome, :data_fundacao, :data_cri)");
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":data_fundacao", $this->data_fundacao);
        $stmt->bindParam(":data_cri", $this->data_cri);
        $stmt->execute();
        return $this->db->lastInsertId();
    }

    public function update($id_editora) {
        $stmt = $this->db->prepare("UPDATE $this->table SET nome=:nome, data_fundacao=:data_fundacao, data_edit=:data_edit WHERE id_editora=:id_editora");
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":data_fundacao", $this->data_fundacao);
        $stmt->bindParam(":data_edit", $this->data_edit);
        $stmt->bindParam(":id_editora", $id_editora);
        $stmt->execute();
    }

    public function delete($id_editora) {
        $stmt = $this->db->prepare("DELETE FROM $this->table WHERE id_editora=:id_editora");
        $stmt->bindParam(":id_editora", $id_editora);
        $stmt->execute();
    }

    public function fetchAll() {
        $stmt = $this->db->prepare("SELECT * FROM $this->table");
        $stmt->execute();

        return $stmt->fetchAll();
    }

}
