<?php
/* Smarty version 4.3.0, created on 2023-03-23 10:39:09
  from 'D:\Documents\Site Projet Web\Projet-Web\tpl\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641c1e3dde40d8_87817724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7990df1fec9277de076982a36130638c35c561d' => 
    array (
      0 => 'D:\\Documents\\Site Projet Web\\Projet-Web\\tpl\\header.tpl',
      1 => 1679564336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641c1e3dde40d8_87817724 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title id="titre"><?php echo $_smarty_tpl->tpl_vars['titre_onglet']->value;?>
</title>

  <link rel="stylesheet" href="/css/style-global.css">
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
          <a href="navigation.php">Navigation</a>
        </div>
        <div>
          <a href="/php/logout.php">Déconnexion</a>
        </div>
      </div>
  </div>
</header><?php }
}
