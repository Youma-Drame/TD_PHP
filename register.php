<?php
include('database.php');
if(isset($_POST['register'])){
    extract($_POST);
    $password = sha1($password);
    try {
        $req = $connection->query("INSERT INTO users (name,telephone,email, password) VALUES('$name', '$telephone', '$email', '$password')");
        $connection->exec($req);
}
    } catch (PDOExecption $e) {
        echo "Une erreur est survenue. Réessayez ultérieurement";
    }
    echo "Inscription réussie";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
</head>
<body>
    <h1>Inscription</h1>
<form action="register.php" method="post">
    <input name="name" type="text" placeholder="prénom et Nom">
    <br><br>
    <input name = "telephone" type="tel" placeholder="Numéro de téléphone">
    <br><br>
    <input name="email" type="email" placeholder="Adresse email">
    <br><br>
    <input name="password"type="password" placeholder="mot de passe">
    <br><br>
    <input name="login" type="submit" value="connexion">
    
   </form> 
</body>
</html>