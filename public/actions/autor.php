<?php

require_once  __DIR__ . '/../../src/autoload.php';

function cadastrarAutor($db, $data_alt) {

    $autor = new Autor($db);
    $autor->setNome($_POST['nome']);
    $autor->setSobrenome($_POST['sobrenome']);
    $autor->setData_nascimento($_POST['data_nascimento']);
    $autor->setData_obito($_POST['data_obito']);
    $autor->setData_cri($data_alt);
    $autor->insert();

    return header("Location: http://". $_SERVER['SERVER_NAME'] ."/index.php?cad=ok");
}

function editarAutor($db, $data_alt) {

    $id_autor = $_POST['id'];

    $autor = new Autor($db);
    $autor->setNome($_POST['nome']);
    $autor->setSobrenome($_POST['sobrenome']);
    $autor->setData_nascimento($_POST['data_nascimento']);
    $autor->setData_obito($_POST['data_obito']);
    $autor->setData_edit($data_alt);
    $autor->update($id_autor);

    return header("Location: http://". $_SERVER['SERVER_NAME'] ."/index.php?edit=ok");
}

function excluirAutor($db) {

    $autor = new Autor($db);
    $autor->delete($_GET['id']);

    return header("Location: http://". $_SERVER['SERVER_NAME'] ."/index.php?exc=ok");
}

$db = new db();
$data_alt = date("d/m/Y");

if (isset($_POST['cad_autor'])) {
    cadastrarAutor($db, $data_alt);
}
elseif (isset($_POST['edit_autor'])) {
    editarAutor($db);
}
 elseif (isset($_GET['id'])) {
    excluirAutor($db);
}


