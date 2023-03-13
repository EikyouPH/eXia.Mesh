<?php
session_start();

if(isset($_POST['submit'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];
   

   // Connect to the database
   $conn = mysqli_connect('main.leskientz.ovh', 'api', 'Ludovic03', 'projet_web');
   // Check connection
   if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
   }

   // Get the user from the database
   $sql = "SELECT * FROM utilisateur WHERE mail = '$username' AND password = '$password'";
   $result = mysqli_query($conn, $sql);
   $user = mysqli_fetch_assoc($result);
   $ID_utilisateur = mysqli_fetch_assoc($result);
   


   // Check if the user exists
   if ($user) {
      $_SESSION['logged_in'] = true;
      header('Location: accueil.php?Id='$ID_utilisateur);
      exit;
    } else {
      $error = "Incorrect username or password.";
    }
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Page de connexion</title>
    <link rel="stylesheet" href="/style.css">
</head>

</video>

<body>
<div class="connexion">
        <div>
            <img src="/img/logo.svg" alt="Logo Place Holder" class="logo-connexion">
        </div>
<div id="conteneur">
                <form method="post" action="index.php?page=login&amp;a=connect">

   
      <label for="username">Identifiant:</label>
      <input type="text" placeholder="Addresse mail" id="username" name="username" required><br><br>
      <label for="password">Mot de passe:</label>
      <input type="password" placeholder="Mot de passe" id="password" name="password" required><br><br>
      <input type="submit" name="submit" value="Submit">
   </form>
</div>
   <?php if(isset($error)) {
      echo "<p style='color:red'>$error</p>";
   } ?>
    </div>
</div>
</body>


</html>


