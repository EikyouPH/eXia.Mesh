<?php
/* Smarty version 4.3.0, created on 2023-03-26 12:45:16
  from 'D:\Documents\Site Projet Web\eXia.Mesh\tpl\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6420223c1f04a5_61672070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '583da2ac62ad63ec3015205fb97c46e8357ae3b3' => 
    array (
      0 => 'D:\\Documents\\Site Projet Web\\eXia.Mesh\\tpl\\index.tpl',
      1 => 1679766612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6420223c1f04a5_61672070 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="/css/connexion.css">
<link rel="stylesheet" href="/css/footer.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<body>
   <div class="connexion">
      <div>
         <img src="/img/logo.svg" alt="Logo Place Holder" class="logo-connexion">
      </div>
      <div id="conteneur">
         <form method="post" action="index.php?page=login&amp;a=connect">
            <label for="username">Identifiant:</label><br>
            <input type="text" placeholder="Adresse mail" id="mail" name="mail" required><br><br>
            <label for="password">Mot de passe:</label><br>
            <input type="password" placeholder="Mot de passe" id="password" name="password" required><br><br>
            <input type="submit" name="submit" value="Connexion" class="a">
         </form>
      </div>
</body><?php }
}
