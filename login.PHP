<?php
session_start();
if(isset($_session['user'])){
    // header("Location: index.php");
}
$usernom="YOUMA";
$password="Drame";
$error = "";
if(isset($_POST["login"])){ 
    if(isset($_POST["username"]) && isset($_POST["password"])){ //vérification de saisie utilisateur
    $input_username = $_POST["username"]; //username saisi par l'utilisateur
    $input_password = $_POST["password"]; //mot de pase saisi par l'utilisateur
    if($username = $input_username && $password = $input_password){
    $_SESSION["user"] = $username;
    header("Location: index.php"); //rediriger vers la page index
    var_dump($_SESSION);
    }else{
        $error = "Informations de connexion incorrectes";
    }
}else{
    $error ="Merci de bien vouloir renseigner tous les champs";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="login.php" method="post">
    <input name="username" type="text" placeholder="nom d'utilisateur">
    <br><br>
    <input name="password"type="password" placeholder="mot de passe">
    <br><br>
    <input name="login" type="submit" value="connexion">
    
   </form>
   <p style="color: red"><?php echo $error; ?></p>
      

  
</body>
</html> 