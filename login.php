<?php
require('actions/loging.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php
require('includes/head.php');
?>
<body>
<br>
    <br>
    <form class="container" method="POST"> 
        <?php
            if(isset($errmsg)) {
                echo '<p>'.$errmsg.'</p>';
            } 
        ?>
        <div class="mb-3">
            <label for="Nom de compte" class="form-label">Nom de Compte</label>
            <input type="text" class="form-control" name="username">
            <div class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="Password" class="form-label">Password</label>
            <input type="password" class="form-control" name="pass">
        </div>
        <button type="submit" class="btn btn-primary" name="valider">Se connecter</button> 
        <a href="register.php"><p> Pas de compte ? Inscrivez-vous ici !</p></a>
    </form>
</body>
</html>