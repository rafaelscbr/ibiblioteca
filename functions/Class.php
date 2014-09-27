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
