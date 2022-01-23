<?php

require('actions/database.php');

$getPost = $db->prepare('SELECT id, titre, description, messages FROM articles WHERE auteurId = ? ORDER BY messages DESC');
$getPost->execute(array($_SESSION['id']));
