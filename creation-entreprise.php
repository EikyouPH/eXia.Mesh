<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title id="titre">Accueil</title>


  <link rel="stylesheet" href="css/style-global.css">
  <link rel="stylesheet" href="css/style-creation-entreprise.css">
  <link rel="stylesheet" href="css/style-footer.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
</head>
<?php include('header.html'); ?>

<body>
  <div>
    <h2>Création de l'entreprise</h2>
  </div>
  <div id="container">
    <fieldset>
      <legend>Informations de l'entreprise</legend>
      <label for="nom-entreprise">Nom de l'entreprise</label>
      <input type="text" name="nom-entreprise" id="nom-entreprise" placeholder="CESI">
      <label for="adresse">Adresse</label>
      <input type="text" name="adresse" id="adresse" placeholder="1 rue de la paix">
      <br>
      <br>
      <label for="ville">Ville</label>
      <input type="text" name="ville" id="ville" placeholder="Lyon">
      <label for="code-postal">Code postal</label>
      <input type="text" name="code-postal" id="code-postal" placeholder="69000">
      <br>
      <br>
      <label for="description">Description</label>
      <textarea name="description" id="description" cols="30" rows="10" placeholder="Description de l'entreprise"></textarea>
    </fieldset>
    <fieldset>
      <legend>Informations complémentaires</legend>
      <label for="secteur">Secteur</label>
      <input type="text" name="secteur" id="secteur" placeholder="Informatique">
      <label for="taille">Taille</label>
      <input type="number" name="taille" id="taille" placeholder="100">
      <br>
      <br>
      <label for="site-web">Site web</label>
      <input type="text" name="site-web" id="site-web" placeholder="https://www.cesi.fr">
      <label for="telephone">Téléphone</label>
      <input type="text" name="telephone" id="telephone" placeholder="04 78 78 78 78">
    </fieldset>
    <div>
      <button type="submit">Annuler</button>
      <button type="submit">Valider</button>
    </div>
  </div>
</body>
<?php include('footer.html'); ?>

</html>