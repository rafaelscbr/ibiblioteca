<?php

include_once 'conexao.php';

$consulta_livros = $db->query("SELECT * FROM ibiblioteca.livros");

$consulta_autores = $db->query("SELECT * FROM ibiblioteca.autores;");

$consulta_editoras = $db->query("SELECT * FROM ibiblioteca.editoras;");
