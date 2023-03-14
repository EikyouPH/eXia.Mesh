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

if (isset($_POST['submit'])) {
  $prenom = mysqli_real_escape_string($conn, $_POST['prenom']);
  $nom_utilisateur = mysqli_real_escape_string($conn, $_POST['nom_utilisateur']);
  $mail = mysqli_real_escape_string($conn, $_POST['mail']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  //faire les requêtes chacales 

  $sql = "UPDATE utilisateur SET prenom='$prenom',nom_utilisateur='$nom_utilisateur', password='$password', mail='$mail' WHERE ID_utilisateur='$_SESSION[ID_utilisateur]'";
  if (mysqli_query($conn, $sql)) {
      header("Location:fiche-profil.php");
  } else {
      echo "Erreur lors de la mise à jour des informations: " . mysqli_error($conn);
  }
}

$sql = "SELECT nom_utilisateur, prenom, password, mail, date_naissance, numero, complement, rue, nom_ville, code_postal, region, nom_pays FROM utilisateur JOIN adresse ON utilisateur.ID_adresse = adresse.ID_adresse JOIN ville ON adresse.ID_ville = ville.ID_ville JOIN region ON ville.ID_region = region.ID_region JOIN pays ON pays.ID_pays = region.ID_pays WHERE ID_utilisateur = '$_SESSION[ID_utilisateur]'";
        $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $nom_utilisateur = $row['nom_utilisateur'];
            $prenom = $row['prenom'];
            $password = $row['password'];
            $mail = $row['mail'];
            $date_naissance = $row['date_naissance'];
            $numero = $row['numero'];
            $complement = $row['complement'];
            $rue = $row['rue'];
            $ville = $row['nom_ville'];
            $code_postal = $row['code_postal'];
            $region = $row['region'];
            $pays = $row['nom_pays'];



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
    <h1 class="bandeau">Modification de profil</h1>
    
    <form method="post">
        
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom_utilisateur" value="<?php echo $nom_utilisateur?>" required><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" value="<?php echo $prenom ?>" required><br>

        <label for="mail">Adresse mail :</label>
        <input type="text" id="mail" name="mail" value="<?php echo $mail ?>" required><br>

        <label for="password">Mot de passe :</label>
        <input type="text" id="password" name="password" value="<?php echo $password ?>" required><br>

        <label for="promo">Promotion :</label>
        <input type="text" id="promo" name="promo" value="<?php echo $promo ?>" required><br>

        <label for="date_naissance">Date de naissance :</label>
        <input type="date" id="date_naissance" name="date_naissance" value="<?php echo $date_naissance ?>" required><br>

        <label for="numero">Numéro de rue :</label>
        <input type="text" id="numero" name="numero" value="<?php echo $numero ?>" required><br>

        <label for="complement">Complement d'adresse :</label>
        <input type="text" id="complement" name="complement" value="<?php echo $complement ?>" required><br>

        <label for="rue">Voie :</label>
        <input type="text" id="rue" name="rue" value="<?php echo $rue ?>" required><br>

        <label for="code_postal">Code postal :</label>
        <input type="text" id="code_postal" name="code_postal" value="<?php echo $code_postal ?>" required><br>

        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville" value="<?php echo $ville ?>" required><br>

        <label for="region">Région :</label>
        <input type="text" id="region" name="region" value="<?php echo $region ?>" required><br>

        <label for="pays">Pays :</label>
        <input type="text" id="pays" name="pays" value="<?php echo $pays ?>" required><br>

        <br><br>
        <input href=profilmod.php type="submit" name="submit" value="Enregistrer">
        <input type="button" class="a" value="Annuler" onclick="window.location.href='fiche-profil.php'" />

    </form>
</body>

</html>
  </body>
  <?php include('footer.html'); ?>

</html>