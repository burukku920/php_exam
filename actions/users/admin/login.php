<?php
if(isset($_POST['valider'])) {
    if(!empty($_POST['username']) && !empty($_POST['password'])) {
        $defaultName = "Admin";
        $defaultPassword = "Admin0";
        $typedName = htmlspecialchars($_POST['username']);
        $typedPassword = password_hash($_POST['password'], PASSWORD_BCRYPT);
        if($typedName == $defaultName && $typedPassword == $defaultPassword) {
            $_SESSION['password'] = $typedPassword;
            header('Location: home.php');
        } else {
            $errmsg = "Erreur ! Nom de compte ou mot de passe inccorect !";
            echo $errormsg;
        }
    } else {
        $errmsg = "Erreur ! Completez tous les champs !";
        echo $errmsg;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Admin</title>
</head>
<body>
    <form method="POST" action="" align="center">
        <input type="text" name="unsername" autocomplete="off">
        <br>
        <input type="password" name="password">
        <br>
        <br>
        <input type="submit" name="valider">
    </form>
</body>
</html>