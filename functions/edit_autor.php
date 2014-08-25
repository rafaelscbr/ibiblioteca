<?php

include_once '../config/conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$data_nascimento = $_POST['data_nascimento'];
$data_obito = $_POST['data_obito'];
$data_atual = date("d/m/y");

try {
    $sql = "UPDATE autores SET nome=?, sobrenome=?, data_nascimento=?, data_obito=?, data_edit=? WHERE id_autor=?";
    $q = $conn->prepare($sql);
    $q->execute(array($nome, $sobrenome, $data_nascimento, $data_obito, $data_atual, $id));
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
