<?php

require_once 'autor.php';
require_once '../helpers/conexao.php';

$id_autor = $_GET['id'];

$autor = new Autor($db);
$autor->delete($id_autor);

header('Location: http://127.0.0.1/ibiblioteca/index.php?exc=ok');
