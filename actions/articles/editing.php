<?php

require('actions/database.php');

//Si l'id est entree 
if(isset($_GET['id']) AND !empty($_GET['id'])) {

    $artId = $_GET['id'];

    //Checker si l'article existe sur le forum
    $artCheck = $db->prepare('SELECT * FROM articles WHERE id = ?');
    $artCheck->execute(array($artId));

    if($artCheck->rowCount() > 0) {

        //Obtenir infos sur l'article
        $getArt = $artCheck->fetch();
        if($getArt['auteurId'] == $_SESSION['id']) {
            $artName = $getArt['titre'];
            $artDesc = $getArt['description'];
            $artDate = $getArt['date'];
            $artContent = $getArt['messages'];
            $artDesc = str_replace('<br />', '', $artDesc);
            $artDesc = str_replace('<br />', '', $artContent);
        } else {
            $errmsg = "Hopopop ! Vous n'etes pas l'auteur de cet article !";
        }
    } else {
        $errmsg = "Erreur ! Articles introuvables !";
    }
} else {
    $errmsg = "Erreur ! Articles introuvables !";
}