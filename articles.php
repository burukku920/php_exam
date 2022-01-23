<?php
require('actions/users/security.php');
require('actions/articles/publishing.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php require('includes/head.php'); ?>
<body>
    <?php
    include 'includes/navbar.php'; 
    ?>
    <br>
    <br>
    <form class="container" method="POST"> 
        <?php
            if(isset($errmsg)) {
                echo '<p>'.$errmsg.'</p>';
            } elseif(isset($reussi)) {
                echo '<p>'.$reussi.'</p>';
            }
        ?>
        <div class="mb-3">
            <label for="Titre" class="form-label">Nom d'article : </label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
            <label for="Desctiption" class="form-label">Description d'article : </label>
            <textarea class="form-control" name="desc"></textarea>
            <div class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="Content" class="form-label">Veuillez entrer votre article</label>
            <textarea class="form-control" name="content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="valider">Poster</button>
    </form>
</body>
</html>