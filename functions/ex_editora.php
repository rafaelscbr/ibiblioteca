<?php

include_once '../helpers/conexao.php';
include_once 'Class.php';

$id_editora = $_GET['id'];
$editora = new Editora($db);

$editora->delete($id_editora);

header('Location: http://127.0.0.1/ibiblioteca/index.php?exc=ok');