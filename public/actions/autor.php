<?php

function cadastrarAutor() {
    require_once  __DIR__ . '/../../src/autor.php';
    require_once  __DIR__ . '/../../config/conexao.php';

    $data_cri = date("d/m/Y");

    $autor = new Autor($db);
    $autor->setNome($_POST['nome']);
    $autor->setSobrenome($_POST['sobrenome']);
    $autor->setData_nascimento($_POST['data_nascimento']);
    $autor->setData_obito($_POST['data_obito']);
    $autor->setData_cri($data_cri);
    $autor->insert();

    return header("Location: http://localhost:8080/index.php?cad=ok");
}

function editarAutor() {
    require_once  __DIR__ . '/../../src/autor.php';
    require_once  __DIR__ . '/../../config/conexao.php';

    $data_edit = date('d/m/Y');

    $id_autor = $_POST['id'];

    $autor = new Autor($db);
    $autor->setNome($_POST['nome']);
    $autor->setSobrenome($_POST['sobrenome']);
    $autor->setData_nascimento($_POST['data_nascimento']);
    $autor->setData_obito($_POST['data_obito']);
    $autor->setData_edit($data_edit);
    $autor->update($id_autor);

    return header("Location: http://localhost:8080/index.php?edit=ok");
}

function excluirAutor() {
    require_once  __DIR__ . '/../../src/autor.php';
    require_once  __DIR__ . '/../../config/conexao.php';

    $autor = new Autor($db);
    $autor->delete($_GET['id']);
    
    return header("Location: http://localhost:8080/index.php?exc=ok");
}

if (isset($_POST['cad_autor'])) {
    cadastrarAutor();
}
elseif (isset($_POST['edit_autor'])) {
    editarAutor();
}
 elseif (isset($_GET['id'])) {
    excluirAutor();
}


