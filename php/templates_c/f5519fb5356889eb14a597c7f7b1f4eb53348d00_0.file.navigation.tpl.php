<?php
/* Smarty version 4.3.0, created on 2023-03-23 10:39:35
  from 'D:\Documents\Site Projet Web\Projet-Web\tpl\navigation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641c1e575cfb89_44389621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5519fb5356889eb14a597c7f7b1f4eb53348d00' => 
    array (
      0 => 'D:\\Documents\\Site Projet Web\\Projet-Web\\tpl\\navigation.tpl',
      1 => 1679498815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641c1e575cfb89_44389621 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="/css/style-navigation.css">

<body>
    <h3>Index des pages</h3>

    <h4>--- Page de login  ---</h4>
    <a href="../index.php">Connexion</a><br>
    <a href="logout.php">Déconnexion</a>

    <h4>--- Page d'accueil ---</h4>
    <a href="accueil.php">Accueil</a>
    
    <h4>--- Pages de profil ---</h4>
    <a href="profil.php">Profil</a>
    <a href="edit_profil.php">Edition de profil</a>

    <h4>--- Page de stage ---</h4>
    <a href="stage.php">Stage</a>

    <h4>--- Page d'entreprise ---</h4>
    <a href="entreprise.php">Entreprise</a>

    <h4>--- Autres pages ---</h4>
    <a href="notifications.php">Notifications</a>
    <a href="confirmation.php">Confirmation</a><br>
    <a href="mentions-legales.php">Mentions légales</a><br>

    <!--
    Les créations (entreprise, profil, stage)
    Les éditions (entreprise, promo, stage)
    Options
    Toutes les pages pour postuler (postuler, recap candidatures)
    La page de recherche
    Les wishlists
</body>

</html><?php }
}
