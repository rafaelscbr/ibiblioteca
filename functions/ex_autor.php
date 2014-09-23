<?php

include_once '../helpers/conexao.php';
include_once 'Class.php';

$id_autor = $_GET['id'];

$autor = new Autor($db);
$autor->delete($id_autor);
