<?php 
require('actions/users/security.php');
require('actions/articles/mesPosting.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php
include 'includes/head.php';
?>
<body>
<?php 
include 'includes/navbar.php';
?>
<br>
<br>
<div class="container">
    <?php
    while($post = $getPost->fetch()) {
        ?>
        <div class="card">
            <h5 class="card-header">
                <a href="lire.php?id=<?php echo $post['id'];?>">
                    <?php echo $post['titre']; ?>
                </a>
            </h5>
            <div class="card-body">
                    <p class="card-text">
                        <?php
                        echo $post['messages'];
                        echo $post['description']; 
                        ?>
                    </p>
                <a href="lire.php?id=<?php echo $post['id']?>" class="btn btn-primary">Lire l'article</a>
                <a href="edit.php?id=<?php echo $post['id']?>" class="btn btn-dark">Editer</a>
                <a href="actions/articles/deleteArticles.php?id=<?php echo $post['id']?>" class="btn btn-secondary">Supprimer l'article</a>
            </div>
        </div>
        <br> 
        <?php
    }
    ?>
    </div>
</body>
</html>