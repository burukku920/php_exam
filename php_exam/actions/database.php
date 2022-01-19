<?php
try {
    $db = new PDO('sqlite:host=localhosst;dbname=php_exam_db;charset=utf8;', 'root', 'root');
}catch(Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
