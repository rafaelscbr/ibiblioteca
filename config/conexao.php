<?php

try {
    $conn = new PDO('mysql:host=localhost;port=3306;dbname=ibiblioteca', 'root', '');
} catch (Exception $ex) {
    echo $ex->getMessage();
}
