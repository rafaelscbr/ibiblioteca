<?php

include_once '../helpers/conexao.php';
include_once 'Class.php';

$data_atual = date('d/m/Y');

$editora = new Editora($db);
$editora->setNome($_POST['nome']);
$editora->setData_fundacao($_POST['data_fundacao']);
$editora->setData_cri($data_atual);
$editora->insert();
