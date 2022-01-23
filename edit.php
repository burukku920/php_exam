<?php
require('actions/users/security.php');
require('actions/articles/editing.php');
require('actions/articles/confirmEdit.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php
include 'includes/head.php';
?>
<body>
    <?php include 'includes/navbar.php';
    ?>  
    <br>
    <br>
    <div class="container">
        <?php
        if(isset($errmsg)) {
            echo '<p>'.$errmsg.'</p>';
        }
        if(isset($artDate)) {
            ?>
            <form method="POST">
                <div class="mb-3">
                    <label for="Titre" class="form-label">Nom d'article : </label>
                    <input type="text" class="form-control" name="title" value="<?php echo $artName;?>">
                </div>
                <div class="mb-3">
                    <label for="Desctiption" class="form-label">Description d'article : </label>
                    <textarea class="form-control" name="description"><?php echo $artDesc; ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="Content" class="form-label">Veuillez entrer votre article</label>
                    <textarea class="form-control" name="content"><?php echo $artContent; ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="valider">Editer</button>
                </form>
                <?php
            }
        ?>        
    </div>
</body>
</html>