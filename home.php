<?php
session_start();
require('actions/articles/articlesList.php');


?>
<!DOCTYPE html>
<html lang="en">
<?php
include 'includes/head.php'
?>
<body>
    <?php
    include 'includes/navbar.php';
    ?>  
    <br>
    <br>
    <div class="container">
        <form method="GET">

            <div class="form-group row">
                <div class="col-8">
                    <input type="search" name="search" class="form-control">
                </div>
                <div class="col-4">
                    <button class="btn btn-secondary">Rechercher</button>
                </div>

            </div>
        </form>
        <br>
        <?php 
        while($post = $getAllArt->fetch()) {
            ?>
            <div class="card">
                <div class="card card-header">
                   <a href="lire.php?id=<?php echo $post['id'];?>">
                        <?php echo $post['titre']; ?>
                    </a>
                </div>
                <div class="card-body">
                    <?php echo $post['description']; ?>
                </div>
                <div class="card-footer">
                    Publié Par <a href="profil.php?id=<?php echo $post['auteurId'];?>"><?php echo $post['auteurName'];?></a> le <?php echo $post['date'];?> 
                </div>
            </div>
            <br>
            <?php
        }
    ?>
    </div>
</body>
</html>