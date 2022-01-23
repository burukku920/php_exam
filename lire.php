<?php
session_start();
require('actions/articles/messagesList.php');
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

        if(isset($errmsg)) {
            echo $errmsg;
        }
        if(isset($artDate)) {
            ?>
            <section class="read">
           
            <h3> <?php echo $artName; ?></h3>
            <hr>
            <p> <?php echo $artContent; ?></p>
            <hr>
            <small><?php echo '<a href="profil.php?id='.$auteurId.'">'.$auteurName . '</a> ' . $artDate; ?>
            </section>   
            <?php
        }
        ?>
    </div> 
</body>
</html>