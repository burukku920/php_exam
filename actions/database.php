<?php
try {
    
    $db = new PDO('mysql:host=localhost;dbname=php_exam_db;charset=utf8;', 'root', '');
}catch(Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
