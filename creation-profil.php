<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title id="titre">Accueil</title>


  <link rel="stylesheet" href="style-global.css">
  <link rel="stylesheet" href="style-creation-profil.css">
  <link rel="stylesheet" href="style-footer.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
</head>
<?php include('header.html'); ?>

<body>
  <div>
    <h2>Création de profil</h2>
  </div>
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

    <label for="nom">Prénom</label>
    <input type="text" name="nom" id="nom" placeholder="John">

  </fieldset>

</body>
<?php include('footer.html'); ?>

</html>