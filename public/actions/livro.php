<?php

function cadastrarLivro() {
    require_once  __DIR__ . '/../../src/livro.php';
    require_once  __DIR__ . '/../../config/conexao.php';

    $data_atual = date('d/m/Y');

    $livro = new Livro($db);

    $livro->setTitulo($_POST['titulo']);
    $livro->setDescricao($_POST['descricao']);
    $livro->setCategoria($_POST['categoria']);
    $livro->setAutor($_POST['autor']);
    $livro->setEditora($_POST['editora']);
    $livro->setData_lancamento($_POST['data_lancamento']);
    $livro->setData_cri($data_atual);
    $livro->insert();

    return header("Location: http://localhost:8080/index.php?cad=ok");
}

function editarLivro() {

    require_once  __DIR__ . '/../../src/livro.php';
    require_once  __DIR__ . '/../../config/conexao.php';

    $data_atual = date('d/m/Y');
    $id_livro = $_POST['id'];

    $livro = new Livro($db);

    $livro->setTitulo($_POST['titulo']);
    $livro->setDescricao($_POST['descricao']);
    $livro->setAutor($_POST['autor']);
    $livro->setEditora($_POST['editora']);
    $livro->setData_lancamento($_POST['data_lancamento']);
    $livro->setData_edit($data_atual);
    $livro->update($id_livro);

    return header("Location: http://localhost:8080/index.php?edit=ok");
}

function excluirLivro() {

    require_once  __DIR__ . '/../../src/livro.php';
    require_once  __DIR__ . '/../../config/conexao.php';

    $id_livro = $_GET['id'];
    $livro = new Livro($db);
    $livro->delete($id_livro);

    return header("Location: http://localhost:8080/index.php?exc=ok");
}

if (isset($_POST['cad_livro'])) {
    cadastrarLivro();
} elseif (isset($_POST['edit_livro'])) {
    editarLivro();
} elseif (isset($_GET['id'])) {
    excluirLivro();
}
