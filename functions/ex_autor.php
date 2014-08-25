<?php

include_once '../config/conexao.php';

$id = $_GET['id'];

try {
  $sql = "DELETE FROM autores WHERE id_autor='". $id ."' ";
  $conn->exec($sql);
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

