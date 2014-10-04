<?php

require_once 'autor.php';
require_once '../helpers/conexao.php';

print_r($_POST);

$data_cri = date("d/m/Y");

$autor = new Autor($db);
$autor->setNome($_POST['nome']);
$autor->setSobrenome($_POST['sobrenome']);
$autor->setData_nascimento($_POST['data_nascimento']);
$autor->setData_obito($_POST['data_obito']);
$autor->setData_cri($data_cri);
$autor->insert();

header('Location: http://127.0.0.1:8080/ibiblioteca/index.php?cad=ok');