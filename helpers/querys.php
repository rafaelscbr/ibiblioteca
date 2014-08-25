<?php

include_once __DIR__ . '\..\config/conexao.php';

$consulta_livros = $conn->query("SELECT * FROM ibiblioteca.livros");

$consulta_autores = $conn->query("SELECT * FROM ibiblioteca.autores;");

$consulta_editoras = $conn->query("SELECT * FROM ibiblioteca.editoras;");
