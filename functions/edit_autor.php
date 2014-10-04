<?php

include_once '../helpers/conexao.php';
require_once 'autor.php';

$data_edit = date('d/m/Y');

$id_autor = $_POST['id'];

$autor = new Autor($db);
$autor->setNome($_POST['nome']);
$autor->setSobrenome($_POST['sobrenome']);
$autor->setData_nascimento($_POST['data_nascimento']);
$autor->setData_obito($_POST['data_obito']);
$autor->setData_edit($data_edit);
$autor->update($id_autor);

header('Location: http://127.0.0.1/ibiblioteca/index.php?edit=ok');
