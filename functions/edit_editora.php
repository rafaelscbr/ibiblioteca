<?php

include_once '../config/conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$data_fundacao = $_POST['data_fundacao'];
$data_atual = date("d/m/y");

try {
    $sql = "UPDATE editoras SET nome=?, data_fundacao=?, data_edit=? WHERE id_editora=?";
    $q = $conn->prepare($sql);
    $q->execute(array($nome, $data_fundacao, $data_atual, $id));
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
