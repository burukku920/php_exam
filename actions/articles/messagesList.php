<?php
require('actions/database.php');

//Si l'id de l'article est entree
if(isset($_GET['id']) && !empty($_GET['id'])) {

    //Recuparation de l'id d'article
    $artId = $_GET['id'];

    //Si l'article a ete cree
    $checkArt = $db->prepare('SELECT * FROM articles WHERE id = ?');
    $checkArt->execute(array($artId));

    if($checkArt->rowCount() > 0) {
        
        //Obtenir les infos sur l'article
        $getArt = $checkArt->fetch();

        //Stockage du titre, du message, de l'id de l'auteur, de son nom d'utilisateur et de la date de publication
        $artName = $getArt['titre'];
        $artContent = $getArt['messages'];
        $auteurId = $getArt['auteurId'];
        $auteurName = $getArt['auteurName'];
        $artDate = $getArt['date'];


    } else {
        $errmsg = "Erreur! Article introuvable";
    }
} else{
    $errmsg = "Erreur, article introuvable !";
}