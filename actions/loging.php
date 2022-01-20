<?php
require('actions/database.php');

if(isset($_POST['valider'])) {

    //Si tous les champs ne sont pas vides
    if(!empty($_POST['username']) AND !empty($_POST['pass'])) {

        //Informations de l'utilisateur
        $userName = htmlspecialchars($_POST['username']);
        $userPassword = htmlspecialchars($_POST['pass']);

        //Voir si l'utilisateur est inscrit
        $checkUser = $db->prepare('SELECT * FROM users WHERE username = ?');
        $checkUser->execute(array($userName));

        if($checkUser->rowCount() > 0) {
            
            //Obtenir les donnees de l'utilisateur
            $aboutUser = $checkUser->fetch(); 

            //Si le mot de passe est correct
            if(password_verify($userPassword, $aboutUser['pass'])) {
                //Authentification de l'utilisateur
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $aboutUser['id'];
                $_SESSION['username'] = $aboutUser['username'];

                //Redirections vers la page d'accueil
                header('Location: home.php');
            } else {
               $errmsg = "Erreur ! Mot de passe incorrect !";
            }
        } else {
            $errmsg = "Erreur ! Nom de compte incorrect !";
        }
    } else {
        $errmsg = "Erreur! Veuillez remplir tous les champs!";
    }
}