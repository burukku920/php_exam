<?php
require('actions/database.php');
if(isset($_POST['valider'])) {
    if(!empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['pass'])) {
        $userName = htmlspecialchars($_POST['username']);
        $userMail = htmlspecialchars($_POST['email']);
        $userPassword = password_hash($_POST['pass'], PASSWORD_DEFAULT);
        $checkUser = $db->prepare('SELECT * FROM users WHERE username = ?');
        $checkUser->execute(array($userName));
        if ($checkUser->rowCount() > 0) {
            $insertUser = $db->prepare('INSERT INTO users(username,pass,email)VALUES(?,?,?)');
            $insertUser->execute(array($userName, $userPassword, $userMail));

            $getUser = $database->prepare('SELECT id, username FROM users WHERE username = ?');
            $getUser->execute(array($userName));
            $aboutUser = $getUser->fetch();
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $aboutUser['id'];
            $_SESSION['username'] = $aboutUser['username'];

            header ('Location: index.php');
        } else {
            $errmsg = "Erreur! Utilisateur deja existant";
        }
    } else {
        $errmsg = "Erreur! Veuillez remplir tous les champs!";
    }
}
