<?php
$hostname= "localhost"

$dbuser = "root"
$dbpassword = "";

$users = [];
try{
  $connection = new PDO("mysql:host=$hostname;dbname=$dbname",$dbuser,$dbpassword);
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODe_EXCEPTION);
  $req = $connection->query("select * from users");
  //fetchAll: permet de récupérer toutes les lignes retournées par la requête
  $users = $req->fetchAll(PDO::FETCH_ASSOC);
  echo "<pre>";
  var_dump($users);
  echo"</pre>";
} catch (PDOException $e) {
  var_dump($e);
  die("Stop");
  //throw $th;
}	



$users = [//Tableau qui contient 3 utilisateurs
  [
    "prenom" => "Youma",
    "Nom" => "Drame",
    "Email" => "youma.drame@edu.ece.fr",
    "Tel" => "07 59 65 58 33",
  ],
  [
    "Prenom" => "Boubacar",
    "Nom"  => "Drame",
    "Email" => "boubacardrame809@gmail.com",
    "Tel" => "60 09 84 97",
  ],
  [
    "prenom"  => "Zeinabou",
    "Nom"  => "Guindo",
    "Email" => "zeinabouguindo00@gmail.com",
    "Tel" => "74 65 20 03",
  ],
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
  <table>
    <tr>
      <th>Prénom</th>
      <th>Nom</th>
      <th>Email</th>
      <th>Téléphone</th>
    </tr> 
    <?php
    
    foreach($users as $value){
      echo"
      <tr>
      <td>".$value['prenom']."</td>
      <td>".$value['Nom']."</td>
      <td>".$value['Email']."</td>
      <td>".$value['Tel']."</td>
      </tr>
      ";
    }
    ?>
  </table> 
</body>
</html>
    

  