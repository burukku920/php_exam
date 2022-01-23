<?php
session_start();
require('actions/users/lireProfil.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php';?>
<body>
<?php include 'includes/navbar.php';?>
<br>
<br>
<div class="container">
<?php
if(isset($errmsg)) {
    echo $errmsg;
}
if(isset($getArt)) {
    ?>
    <div class="card">
        <div class="card-body">
            <h5> <?php echo "Nom d'utilisateur : " . $userName;?></h4>
        </div>
    </div>
    <br>
    <?php
    while($post = $getArt->fetch()) {
        ?>
        <div class="card">
            <div class="card-header">
                <?php echo "Nom de l'article : " . $post['titre']; ?>
            </div>
            <div class="card-body">
                <?php echo "Description de l'article : " . $post['description']; ?>
            </div>
            <div class="card-footer">
                <?php echo $post['auteurName'];?> Publié le : <?php echo $post['date'];?>
            </div>
        <?php
    }
}

?>
</div>
</body>
</html>