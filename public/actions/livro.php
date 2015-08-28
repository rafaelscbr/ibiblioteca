<?php

require_once  __DIR__ . '/../../src/autoload.php';

function cadastrarLivro($db, $data_alt) {

    $livro = new Livro($db);

    $livro->setTitulo($_POST['titulo']);
    $livro->setDescricao($_POST['descricao']);
    $livro->setCategoria($_POST['categoria']);
    $livro->setAutor($_POST['autor']);
    $livro->setEditora($_POST['editora']);
    $livro->setData_lancamento($_POST['data_lancamento']);
    $livro->setData_cri($data_alt);
    $livro->insert();

    return header("Location: http://". $_SERVER['SERVER_NAME'] ."/index.php?cad=ok");
}

function editarLivro($db, $data_alt) {

    $id_livro = $_POST['id'];

    $livro = new Livro($db);

    $livro->setTitulo($_POST['titulo']);
    $livro->setDescricao($_POST['descricao']);
    $livro->setCategoria($_POST['categoria']);
    $livro->setAutor($_POST['autor']);
    $livro->setEditora($_POST['editora']);
    $livro->setData_lancamento($_POST['data_lancamento']);
    $livro->setData_edit($data_alt);
    $livro->update($id_livro);

    return header("Location: http://". $_SERVER['SERVER_NAME'] ."/index.php?edit=ok");
}

function excluirLivro($db) {

    $id_livro = $_GET['id'];

    $livro = new Livro($db);
    $livro->delete($id_livro);

    return header("Location: http://". $_SERVER['SERVER_NAME'] ."/index.php?exc=ok");
}

$db = new db();
$data_alt = date("d/m/Y");

if (isset($_POST['cad_livro'])) {
    cadastrarLivro($db, $data_alt);
}
elseif (isset($_POST['edit_livro'])) {
    editarLivro($db, $data_alt);
}
elseif (isset($_GET['id'])) {
    excluirLivro($db);
}
