<?php
/* Smarty version 4.3.0, created on 2023-03-25 11:45:28
  from 'D:\Documents\Site Projet Web\eXia.Mesh\tpl\navigation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641ed0c8369b30_62036501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1cdabe9a8c7db24dbb947a729c9d4e075f3c6d8' => 
    array (
      0 => 'D:\\Documents\\Site Projet Web\\eXia.Mesh\\tpl\\navigation.tpl',
      1 => 1679671621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641ed0c8369b30_62036501 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="/css/style-navigation.css">

<body>
    <h3>Index des pages</h3>

    <h4>--- Page de login ---</h4>
    <a href="../index.php">Connexion</a><br>
    <a href="logout.php">Déconnexion</a>

    <h4>--- Page d'accueil ---</h4>
    <a href="accueil.php">Accueil</a>

    <h4>--- Pages de profil ---</h4>
    <a href="profil.php">Profil</a><br>
    <a href="edit_profil.php">Edition de profil</a>

    <h4>--- Page de stage ---</h4>
    <a href="stage.php">Stage</a>

    <h4>--- Page d'entreprise ---</h4>
    <a href="entreprise.php">Entreprise</a>

    <h4>--- Wishlist ---</h4>
    <a href="wishlist.php">Wishlist</a><br>
    <a href="wishlist-liste.php">Liste des Wishlists</a>

    <h4>--- Recap candidatures ---</h4>
    <a href="postuler.php">Page postulation</a><br>
    <a href="recap-candidatures.php">Recap candidatures</a><br>
    <a href="candidature.php">Candidatures</a>

    <h4>--- Autres pages ---</h4>
    <a href="notifications.php">Notifications</a><br>
    <a href="confirmation.php">Confirmation</a><br>
    <a href="mentions-legales.php">Mentions légales</a><br>
</body>

<!--
    Les créations (entreprise, profil, stage)
    Les éditions (entreprise, promo, stage)
    Options
    La page de recherche
--><?php }
}
