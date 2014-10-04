<?php

include_once '../helpers/conexao.php';
include_once 'livros.php';

$id_livro = $_GET['id'];
$livro = new Livro($db);
$livro->delete($id_livro);

header('Location: http://127.0.0.1/ibiblioteca/index.php?exc=ok');

