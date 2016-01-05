<?php

require_once  __DIR__ . '/../../src/autoload.php';
require_once __DIR__ . '/../../src/conexao.php';

$editora = new Editora($db);

if($_GET['acao'] == 'getall') {
    $editoras = $editora->getAll();

    echo json_encode($editoras);
    die();
}

if($_GET['acao'] == 'add') {
	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);

	$editora->setNome($request->nome);
	$editora->setData_fundacao($request->data_fundacao);
    $editora->insert();

    die();
}

