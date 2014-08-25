<?php

try {
    $conn = new PDO('mysql:host=localhost;port=3306;dbname=ibiblioteca', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $ex) {
    echo $ex->getMessage();
}
