<?php

include_once '../config/conexao.php';

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$categoria = $_POST['categoria'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$data_lancamento = $_POST['data_lancamento'];
$data_atual = date("d/m/y");

try {
    $sql = "INSERT INTO livros (titulo, descricao, categoria, autor, editora, data_lancamento, data_cri, data_edit) VALUES (:titulo, :descricao, :categoria, :autor, :editora, :data_lancamento, :data_cri, :data_edit)";
    $q = $conn->prepare($sql);
    $q->execute(array(
        ':titulo' => $titulo,
        ':descricao' => $descricao,
        ':categoria' => $categoria,
        ':autor' => $autor,
        ':editora' => $editora,
        ':data_lancamento' => $data_lancamento,
        'data_cri' => $data_atual,
        'data_edit' => ''
    ));
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}