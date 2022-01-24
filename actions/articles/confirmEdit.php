<?php
require('actions/database.php');

//Si le formulaire est valide
if(isset($_POST['valider'])) {

    //Si aucun champ n'est vide
    if(!empty(['title']) AND !empty($_POST['description']) AND !empty($_POST['content'])) {
        
        //Obtention des infos a editer
        $editedArt = htmlspecialchars($_POST['title']);
        $editedDesc = nl2br($_POST['description']);
        $editedPost = htmlspecialchars($_POST['content']);

        //Utilisation de la requette update pour editer les infos 
        $addEdit = $db->prepare('UPDATE articles SET titre = ?, description = ?, messages = ? WHERE id = ?');
        $addEdit->execute(array($editedArt, $editedDesc, $editedPost, $artId));
        header('Location: mesPost.php');
    } else {
        $errmsg = "Erreur ! Completez tous les champs !";
    }
}