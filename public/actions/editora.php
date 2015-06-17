<?php

function cadastrarEditora() {

    require_once __DIR__ . '/../../src/editora.php';
    require_once __DIR__ . '/../../config/conexao.php';

    $data_atual = date('d/m/Y');

    $editora = new Editora($db);
    $editora->setNome($_POST['nome']);
    $editora->setData_fundacao($_POST['data_fundacao']);
    $editora->setData_cri($data_atual);
    $editora->insert();

    return header("Location: http://localhost:8080/index.php?cad=ok");
}

function editarEditora() {

    require_once  __DIR__ . '/../../src/editora.php';
    require_once  __DIR__ . '/../../config/conexao.php';

    $data_atual = date('d/m/Y');

    $id_editora = $_POST['id'];

    $editora = new Editora($db);
    $editora->setNome($_POST['nome']);
    $editora->setData_fundacao($_POST['data_fundacao']);
    $editora->setData_edit($data_atual);
    $editora->update($id_editora);

    return header("Location: http://localhost:8080/index.php?edit=ok");
}

function excluirEditora() {
    
    require_once  __DIR__ . '/../../src/editora.php';
    require_once  __DIR__ . '/../../config/conexao.php';

    $id_editora = $_GET['id'];
    $editora = new Editora($db);

    $editora->delete($id_editora);

    return header("Location: http://localhost:8080/index.php?exc=ok");
}

if (isset($_POST['cad_editora'])) {
    cadastrarEditora();
} elseif (isset($_POST['edit_editora'])) {
    editarEditora();
} elseif(isset($_GET['id'])){
    excluirEditora();
}
