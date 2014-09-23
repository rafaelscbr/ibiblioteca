<?php

include_once '../helpers/conexao.php';
include_once 'Class.php';

$editora = new Editora($db);

$data_atual = date('d/m/Y');

$editora->setNome($_POST['nome']);
$editora->setData_fundacao($_POST['data_fundacao']);
$editora->setData_edit($data_atual);
$editora->update($_POST['id']);