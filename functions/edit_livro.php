<?php 

include_once '../helpers/conexao.php';
include_once 'livros.php';

$data_atual = date('d/m/Y');
$id_livro = $_POST['id'];

$livro = new Livro($db);

$livro->setTitulo($_POST['titulo']);
$livro->setDescricao($_POST['descricao']);
$livro->setAutor($_POST['autor']);
$livro->setEditora($_POST['editora']);
$livro->setData_lancamento($_POST['data_lancamento']);
$livro->setData_edit($data_atual);
$livro->update($id_livro);

header('Location: http://127.0.0.1/ibiblioteca/index.php?edit=ok');