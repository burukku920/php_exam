<?php
require('actions/database.php');

//Recuperation de l'id de l'utilisateur
if(isset($_GET['id']) && !empty($_GET['id'])) {
    
    //Stockage de l'id de l'utilisateur dans une variable
    $userId = $_GET['id'];

    //Si l'utilisateur existe
    $userCheck = $db->prepare('SELECT username FROM users WHERE id = ?');
    $userCheck->execute(array($userId));

    if($userCheck->rowCount() > 0) {

        //Recuperation d'infos de l'utilisateur
        $getUser = $userCheck->fetch();
        $userName = $getUser['username'];
      
        //Recuperation des articles de tel utilisateur
        $getArt = $db->prepare('SELECT * FROM articles WHERE auteurId = ? ORDER BY id DESC');
        $getArt->execute(array($userId));
    } else {
        $errmsg = "Erreur ! Utilisateur introuvable !";
    }
} else {
    $errmsg = "Erreur ! Utilisateur introuvable !";
}