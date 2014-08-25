<?php

include_once '../config/conexao.php';

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$data_nascimento = $_POST['data_nascimento'];
$data_obito = $_POST['data_obito'];
$data_atual = date("d/m/y");

try {
    $sql = "INSERT INTO autores (nome, sobrenome, data_nascimento, data_obito, data_cri, data_edit) VALUES (:nome, :sobrenome, :data_nascimento, :data_obito, :data_cri, :data_edit)";
    $q = $conn->prepare($sql);
    $q->execute(array(
        ':nome' => $nome,
        ':sobrenome' => $sobrenome,
        ':data_nascimento' => $data_nascimento,
        ':data_obito' => $data_obito,
        ':data_cri' => $data_atual,
        ':data_edit' => '',
    ));
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
