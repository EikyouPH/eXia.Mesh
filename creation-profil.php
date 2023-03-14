<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title id="titre">Accueil</title>


  <link rel="stylesheet" href="css/style-global.css">
  <link rel="stylesheet" href="css/style-creation-profil.css">
  <link rel="stylesheet" href="css/style-footer.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
</head>
<?php include('header.html'); ?>

<body>
  <div>
    <h2>Création de profil</h2>
  </div>
  <div id="container">
    <fieldset>

      <legend>Choisir le type du compte</legend>

      <input type="radio" id="etudiant" name="type-compte" value="etudiant" checked>
      <label for="etudiant">Étudiant</label>

      <input type="radio" id="pilote" name="type-compte" value="pilote">
      <label for="pilote">Pilote</label>

      <input type="radio" id="recruteur" name="type-compte" value="recruteur">
      <label for="recruteur">Recruteur</label>

    </fieldset>

    <fieldset>

      <legend>Informations personnelles</legend>

      <label for="prenom">Prénom</label>
      <input type="text" name="prenom" id="prenom" placeholder="John">
      <label for="nom">Nom</label>
      <input type="text" name="nom" id="nom" placeholder="Doe">
      <br>
      <br>
      <label for="email">Adresse e-mail</label>
      <input type="email" name="email" id="email" placeholder="prenom.nom@viacesi.fr">
      <label for="mdp">Mot de passe</label>
      <input type="password" name="mdp" id="mdp" placeholder="********">
      <br>
      <br>
      <label for="date-naissance">Date de naissance</label>
      <input type="date" name="date-naissance" id="date-naissance">
      <br>
      <label for="adresse-postal">Adresse</label>
      <input type="text" name="adresse-postal" id="adresse-postal" placeholder="1 rue de la paix">
    </fieldset>

    <fieldset>

      <legend>Réseaux</legend>
      <label for="linkedin">LinkedIn</label>
      <input type="text" name="linkedin" id="linkedin" placeholder="https://www.linkedin.com/">
      <label for="indeed">Indeed</label>
      <input type="text" name="indeed" id="indeed" placeholder="https://www.indeed.com/">
      <label for="facebook">Facebook</label>
      <input type="text" name="facebook" id="facebook" placeholder="https://www.facebook.com/">
      <label for="site-perso">Site Perso</label>
      <input type="text" name="site-perso" id="site-perso" placeholder="https://www.site-perso.com/">
    </fieldset>
    <div>
      <button type="submit">Annuler</button>
      <button type="submit">Valider</button>
    </div>
  </div>

</body>
<?php include('footer.html'); ?>

</html>