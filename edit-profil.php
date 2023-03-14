<?php include('verif-session.php'); ?>
<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  header("Location: index.php");
  exit;
}
// Connect to the database
$conn = mysqli_connect('main.leskientz.ovh', 'api', 'Ludovic03', 'projet_web');
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT nom_utilisateur, prenom, password, mail, date_naissance, ID_adresse FROM utilisateur WHERE ID_utilisateur = '$_SESSION[ID_utilisateur]'";
            $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                $nom_utilisateur = $row['nom_utilisateur'];
                $prenom = $row['prenom'];
                $password = $row['password'];
                $mail = $row['mail'];
                $date_naissance = $row['date_naissance'];
                $perm = $row['ID_adresse'];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title id="titre">Modification Compte</title>

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
</head>

<header>
  <table>
    <thead>
      <td><a href="index.html"><img src="/img/logo.svg" alt="retour accueil" id="img-acceuil"></a>
      </td>
      <td>
        <h1>Modification compte</h1>
      </td>
    </thead>
  </table>

  <?php include('header.html'); ?>

  <body>
  </body>
  <?php include('footer.html'); ?>

</html>