<?php
session_start();

if (isset($_POST['submit'])) {
   $mail = $_POST['mail'];
   $password = $_POST['password'];


   // Connexion à la base de données
   $conn = mysqli_connect('main.leskientz.ovh', 'api', 'Ludovic03', 'projet_web');
   // Vérification de la connexion
   if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
   }

   // Récupération de l'utilisateur
   $sql = "SELECT ID_utilisateur FROM utilisateur WHERE mail = '$mail' AND password = '$password'";
   $result = mysqli_query($conn, $sql);
   $user = mysqli_fetch_assoc($result);


   // Vérification de l'existance de l'utilisateur
   if ($user) {
      $_SESSION['logged_in'] = true;
      $_SESSION['ID_utilisateur'] = $user['ID_utilisateur'];
      header('Location: /php/accueil.php');
      exit;
   } else {
      $error = "Incorrect username or password.";
   }
}
?>

<!DOCTYPE html>
<html>

<head>
   <title>Page de connexion</title>
   <link rel="stylesheet" href="css/style-connexion.css">
   <link rel="stylesheet" href="css/style-footer.css">
</head>


<body>
   <div class="connexion">
      <div>
         <img src="/img/logo.svg" alt="Logo Place Holder" class="logo-connexion">
      </div>
      <div id="conteneur">
         <form method="post" action="index.php?page=login&amp;a=connect">


            <label for="username">Identifiant:</label>
            <input type="text" placeholder="Adresse mail" id="mail" name="mail" required><br><br>
            <label for="password">Mot de passe:</label>
            <input type="password" placeholder="Mot de passe" id="password" name="password" required><br><br>
            <input type="submit" name="submit" value="Submit">
         </form>
      </div>
      <?php if (isset($error)) {
         echo "<p style='color:red'>$error</p>";
      } ?>
   </div>
   </div>
</body>
<?php include 'footer.html'; ?>

</html>