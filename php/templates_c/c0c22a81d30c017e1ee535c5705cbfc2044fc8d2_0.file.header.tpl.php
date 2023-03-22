<?php
/* Smarty version 4.3.0, created on 2023-03-21 14:20:18
  from 'C:\Users\LudoK\OneDrive\CESI\A2\Web\projet\Projet-Web\tpl\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6419af12a525f4_25764849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0c22a81d30c017e1ee535c5705cbfc2044fc8d2' => 
    array (
      0 => 'C:\\Users\\LudoK\\OneDrive\\CESI\\A2\\Web\\projet\\Projet-Web\\tpl\\header.tpl',
      1 => 1679404011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6419af12a525f4_25764849 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title id="titre"><?php echo $_smarty_tpl->tpl_vars['titre_onglet']->value;?>
</title>

  <link rel="stylesheet" href="/css/style-global.css">
  <link rel="stylesheet" href="/css/style-footer.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
</head>
<header>
  <nav>
    <div class="header">
      <div>
        <a href="accueil.php"><img src="/img/logo.svg" alt="retour accueil"></a>
      </div>
      <div>
        <h1><?php echo $_smarty_tpl->tpl_vars['titre_page']->value;?>
</h1>
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
          <a href="logout.php">Déconnexion</a>
        </div>
      </div>
  </div>
</header><?php }
}
