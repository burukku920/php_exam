<?php
require('actions/database.php');

//Obtenir les articles en-dehors des recherches 
$getAllArt = $db->query('SELECT id, auteurId, auteurName, titre, description, date FROM articles ORDER BY date DESC LIMIT 0,13'); 

//Checker si une recherche a ete entree, si la barre de recherche n'est pas vide
if(isset($_GET['search']) && !empty($_GET['search'])) {
    $searchUser = $_GET['search'];

    //Obtenir les articles selon la recherche en evitant de limiter les recherches
    $getAllArt = $db->query('SELECT id, auteurId, auteurName, titre, description, date FROM articles WHERE titre LIKE "%'.$searchUser.'%" ORDER BY date DESC');
    
}