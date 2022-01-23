<?php
require('actions/users/registering.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php require('includes/head.php'); ?>
<body>
    <br>
    <br>
    <form class="container" method="POST"> 
        <?php
            include 'includes/navbar.php';
            if(isset($errmsg)) {
                echo '<p>'.$errmsg.'</p>';
            } 
        ?>
        <div class="mb-3">
            <label for="Email" class="form-label">Adresse email</label>
            <input type="email" class="form-control btn-warning" name="email">
            <div class="form-text btn-warning">Vos informations ne seront pas partagés.</div>
        </div>
        <div class="mb-3">
            <label for="Nom de compte" class="form-label">Nom de Compte</label>
            <input type="text" class="form-control btn-warning" name="username">
            <div class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="Password" class="form-label">Password</label>
            <input type="password" class="form-control btn-warning" name="pass">
        </div>
        <button type="submit" class="btn btn-warning" name="valider">S'inscrire</button>
        <a href="login.php"><p> Déjà inscrit ? Connectez-vous ici !</p></a>
    </form>
</body>
</html>