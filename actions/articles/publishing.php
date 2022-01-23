<?php
require('actions/database.php');

//Si le formulaire est valide
if(isset($_POST['valider'])) {

    //Si aucun champ n'est vide
    if(!empty($_POST['title']) AND !empty($_POST['desc']) AND !empty($_POST['content'])) {
        
        //Informations articles
        $artName = htmlspecialchars($_POST['title']);
        $artDesc = nl2br(htmlspecialchars($_POST['desc']));
        $artContent = nl2br(htmlspecialchars($_POST['content']));
        $artDate = date('d-m-Y H:i');
        $userId = $_SESSION['id'];
        $auteurName = $_SESSION['username'];
        
        //Insertion d'articles
        $insertArt = $db->prepare('INSERT INTO articles(titre,description,date,auteurId,auteurName,messages)VALUES(?,?,?,?,?,?)');
        $insertArt->execute(array($artName, $artDesc, $artDate, $userId, $auteurName, $artContent));
        $reussi = "Votre article a ete poste avec succes !";
    } else {
        $errmsg = "Veuillez remplir chaque champs";
    }
}