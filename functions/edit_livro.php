<?php 
include_once '../config/conexao.php';

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$categoria = $_POST['categoria'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$data_lancamento = $_POST['data_lancamento'];
$data_atual = date("d/m/y");

try {
    $sql = "UPDATE livros SET titulo=?, descricao=?, categoria=?, autor=?, editora=?, data_lancamento=?, data_edit=? WHERE id_livros=?";
    $q = $conn->prepare($sql);
    $q->execute(array($titulo, $descricao, $categoria, $autor, $editora, $data_lancamento, $data_atual, $id));
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
