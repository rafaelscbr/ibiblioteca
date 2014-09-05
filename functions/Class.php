<?php

require_once '../config/conexao.php';
require_once '../helpers/Crud.php';

class Autor extends Crud {

    private $nome;
    private $sobrenome;
    private $data_nascimento;
    private $data_obito;
    private $data_cri;
    protected $table = 'Autores';

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
    
    public function getData_cri(){
        return $this->data_cri;
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

}
