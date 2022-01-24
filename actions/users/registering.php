<?php
session_start();
require('actions/database.php');

//Si le formulaire est valide (bouton confirmer clique)
if(isset($_POST['valider'])) {

    //Si tous les champs ne sont pas vides
    if(!empty($_POST['email']) AND !empty($_POST['username']) AND !empty($_POST['pass'])) {

        //Informations de l'utilisateur
        $userName = htmlspecialchars($_POST['username']);
        $userMail = htmlspecialchars($_POST['email']);
        $userPassword = password_hash($_POST['pass'], PASSWORD_BCRYPT);

        //Voir si le compte existe deja
        $checkUser = $db->prepare('SELECT * FROM users WHERE username = ?');
        $checkUser->execute(array($userName));
        if ($checkUser->rowCount() == 0) {

            //Insertion de l'utilisateur dans la database
            $insertUser = $db->prepare('INSERT INTO users(username,pass,email)VALUES(?,?,?)');
            $insertUser->execute(array($userName, $userPassword, $userMail));
            
            //Obtention des infos de l'utilisateur
            $getUser = $db->prepare('SELECT id, username FROM users WHERE username = ?');
            $getUser->execute(array($userName));
            $aboutUser = $getUser->fetch();

            //Authentification de l'utilisateur
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $aboutUser['id'];
            $_SESSION['username'] = $aboutUser['username'];
            //Redirection sur la page Home
            header ('Location: home.php');
        } else {
            $errmsg = "Erreur! Utilisateur deja existant";
        }
    } else {
        $errmsg = "Erreur! Veuillez remplir tous les champs!";
    }
}
