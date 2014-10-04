<?php

require_once '../helpers/conexao.php';
require_once '../helpers/Crud.php';

class Autor extends Crud {

    private $id_autor;
    private $nome;
    private $sobrenome;
    private $data_nascimento;
    private $data_obito;
    private $data_cri;
    private $data_edit;
    protected $table = 'autores';

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
        $stmt = $this->db->prepare("INSERT INTO  $this->table (nome, sobrenome, data_nascimento, data_obito, data_cri) VALUES(:nome, :sobrenome, :data_nascimento, :data_obito, :data_cri)");
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":sobrenome", $this->sobrenome);
        $stmt->bindParam(":data_nascimento", $this->data_nascimento);
        $stmt->bindParam(":data_obito", $this->data_obito);
        $stmt->bindParam(":data_cri", $this->data_cri);
        $stmt->execute();
        return $this->db->lastInsertId();
    }

    public function update($id_autor) {
        $stmt = $this->db->prepare("UPDATE $this->table SET nome=:nome, sobrenome=:sobrenome, data_nascimento=:data_nascimento, data_obito=:data_obito, data_edit=:data_edit WHERE id_autor=:id_autor");
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":sobrenome", $this->sobrenome);
        $stmt->bindParam(":data_nascimento", $this->data_nascimento);
        $stmt->bindParam(":data_obito", $this->data_obito);
        $stmt->bindParam(":data_edit", $this->data_edit);
        $stmt->bindParam(":id_autor", $id_autor);
        $stmt->execute();
    }

    public function delete($id_autor) {
        $stmt = $this->db->prepare("DELETE FROM $this->table WHERE id_autor=':id_autor'");
        $stmt->bindParam(":id_autor", $this->id_autor);
        $stmt->execute();
    }

    public function fetchAll() {
        $stmt = $this->db->prepare("SELECT * FROM $this->table");
        $stmt->execute();

        return $stmt->fetchAll();
    }

}