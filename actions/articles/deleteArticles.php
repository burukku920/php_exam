<?php
session_start();
if(!isset($_SESSION['auth'])) {
    header('Location: ../../login.php');
}

require('../database.php');

if(isset($_GET['id']) AND !empty($_GET['id'])) {
    $idSupp = $_GET['id'];
    $checkSupp = $db->prepare('SELECT * FROM articles WHERE id = ?');
    $checkSupp->execute(array($idSupp));

    if($checkSupp->rowCount() > 0) {
        
        $aboutSupp = $checkSupp->fetch();
        if($aboutSupp['auteurId'] == $_SESSION['id']) {
            
            $artSupp = $db->prepare('DELETE FROM articles WHERE id = ?');
            $artSupp->execute(array($idSupp));

            header('Location: ../../mesPost.php');
        } else {
            $errmsg = "Erreur ! Ce n'est pas l'un de vos articles !";
        }
    } else {
        $errmsg = "Erreur ! Article introuvable !";
    }
} else {
    $errmsg = "Erreur ! Article introuvable !";
}