<?php include('verif-session.php'); ?>
<?php
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

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="style-global.css">
  <link rel="stylesheet" href="style-footer.css">
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
  <html>

<head>
    <meta charset="UTF-8">
    <title>Modification de profil</title>
    <link rel="stylesheet" href="source/acceuil.css">
</head>

<body>
    <video id="background-video" autoplay loop muted>
        <source src="/source/loginmatrix.mp4" type="video/mp4">
    </video>

    <h1 class="bandeau">Modification de profil</h1>
    
    <form method="post">
        <?php echo $AI ?>
        <label for="id">ID de connexion:</label>
        <input type="text" id="id" name="id" value="<?php echo $Id ?>" required>

        <label for="username">Nom :</label>
        <input type="text" id="username" name="username" value="<?php echo $username ?>" required>

        <label for="password">Mot de passe:</label>
        <input type="text" id="password" name="password" value="<?php echo $password ?>" required>

        <label for="promo">Promotion d'étude :</label>
        <input type="text" id="promo" name="promo" value="<?php echo $promo ?>" required>
        <i style=font-size:20px>Si externe à CESI, remplir le formulaire en inscrivant "A0"</i>

        <br><br>
        <input href=profilmod.php type="submit" name="submit" value="Enregistrer">
        <input type="button" class="a" value="Annuler" onclick="window.location.href='profilmod.php'" />
        
        
        <input href=profilmod.php type="submit" name="delete" value="Supprimer" style='background-color: #ff0000'>
    </form>
</body>

</html>
  </body>
  <?php include('footer.html'); ?>

</html>