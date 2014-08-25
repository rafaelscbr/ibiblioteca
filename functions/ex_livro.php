<?php 
include_once '../config/conexao.php';

$id = $_GET['id'];

try {
  $sql = "DELETE FROM livros WHERE id_livros='". $id ."' ";
  $conn->exec($sql);
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
