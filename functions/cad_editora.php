<?php

include_once '../config/conexao.php';

$nome = $_POST['nome'];
$data_fundacao = $_POST['data_fundacao'];
$data_atual = date("d/m/y");

try {
    $sql = "INSERT INTO editoras (nome, data_fundacao, data_cri, data_edit) VALUES (:nome, :data_fundacao, :data_cri, :data_edit)";
    $q = $conn->prepare($sql);
    $q->execute(array(
        ':nome' => $nome,
        ':data_fundacao' => $data_fundacao,
        ':data_cri' => $data_atual,
        ':data_edit' => '',
    ));
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

