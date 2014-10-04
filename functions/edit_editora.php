<?php

include_once '../helpers/conexao.php';
require_once 'editora.php';

$data_atual = date('d/m/Y');

$id_editora = $_POST['id'];

$editora = new Editora($db);
$editora->setNome($_POST['nome']);
$editora->setData_fundacao($_POST['data_fundacao']);
$editora->setData_edit($data_atual);
$editora->update($id_editora);

header('Location: http://127.0.0.1/ibiblioteca/index.php?edit=ok');