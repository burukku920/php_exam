<?php
try {
    $db = new mysqli("localhost", "root", "", "php_exam_db");
}catch(Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
