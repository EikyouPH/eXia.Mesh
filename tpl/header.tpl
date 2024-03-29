<!DOCTYPE html lang="fr">
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title id="titre">{$titre_onglet}</title>

  <link rel="stylesheet" href="/css/global.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="manifest" href="../manifest.json">
  <link rel="apple-touch-icon" href="/img/logo152x152.png">
  <meta name="theme-color" content="#0E8388" >
  <meta name="description" content="{$description}">
</head>
<header>
  <nav>
    <div class="header-global">
      <div>
        <a href="accueil.php"><img src="/img/logo.svg" alt="retour accueil"></a>
      </div>
      <div>
        <h1>{$titre_page}</h1>
      </div>
      <div>
        <a href="notifications.php"><img src="/img/notifications.png" alt="notifications"></a>
        <a href="/php/profil.php"><img src="/img/profil.png" alt="options"></a>
      </div>
    </div>
  </nav>
  <div>
    <nav>
      <div class="bandeau">
        <div>
          <a href="recherche.php">Recherche</a>
        </div>
        <div>
          <a href="avis-entreprise.php">Avis entreprise</a>
        </div>
        <div>
          <a href="navigation.php">Navigation</a>
        </div>
        <div>
          <a href="/php/logout.php">Déconnexion</a>
        </div>
      </div>
  </div>
</header>