<?php

include_once '../config/conexao.php';

$id = $_GET['id'];

try {
  $sql = "DELETE FROM editoras WHERE id_editora='". $id ."' ";
  $conn->exec($sql);
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
