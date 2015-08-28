<?php

require_once  __DIR__ . '/../../src/autoload.php';

function cadastrarEditora($db, $data_alt) {

    $editora = new Editora($db);
    $editora->setNome($_POST['nome']);
    $editora->setData_fundacao($_POST['data_fundacao']);
    $editora->setData_cri($data_alt);
    $editora->insert();

    return header("Location: http://". $_SERVER['SERVER_NAME'] ."/index.php?cad=ok");
}

function editarEditora($db, $data_alt) {

    $id_editora = $_POST['id'];

    $editora = new Editora($db);
    $editora->setNome($_POST['nome']);
    $editora->setData_fundacao($_POST['data_fundacao']);
    $editora->setData_edit($data_alt);
    $editora->update($id_editora);

    return header("Location: http://". $_SERVER['SERVER_NAME'] ."/index.php?edit=ok");
}

function excluirEditora($db) {

    $id_editora = $_GET['id'];
    $editora = new Editora($db);

    $editora->delete($id_editora);

    return header("Location: http://". $_SERVER['SERVER_NAME'] ."/index.php?exc=ok");
}

$db = new db();
$data_alt = date("d/m/Y");

if (isset($_POST['cad_editora'])) {
    cadastrarEditora($db, $data_alt);
}
elseif (isset($_POST['edit_editora'])) {
    editarEditora($db, $data_alt);
}
elseif(isset($_GET['id'])){
    excluirEditora($db);
}
