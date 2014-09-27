<?php

include_once '../helpers/conexao.php';
include_once 'Class.php';

$data_atual = date('d/m/Y');

$livro = new Livro($db);

$livro->setTitulo($_POST['titulo']);
$livro->setDescricao($_POST['descricao']);
$livro->setCategoria($_POST['categoria']);
$livro->setAutor($_POST['autor']);
$livro->setEditora($_POST['editora']);
$livro->setData_lancamento($_POST['data_lancamento']);
$livro->setData_cri($data_atual);
$livro->insert();

header('Location: http://127.0.0.1/ibiblioteca/index.php?cad=ok');

