<?php
/* Smarty version 4.3.0, created on 2023-03-22 14:58:15
  from 'D:\Documents\Site Projet Web\Projet-Web\tpl\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641b09779a97c2_91916767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95903f6bc82693f8b23ee6ed5bcbf2a784cacb15' => 
    array (
      0 => 'D:\\Documents\\Site Projet Web\\Projet-Web\\tpl\\index.tpl',
      1 => 1679422901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641b09779a97c2_91916767 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="/css/style-connexion.css">
<link rel="stylesheet" href="/css/style-footer.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<body>
   <div class="connexion">
      <div>
         <img src="/img/logo.svg" alt="Logo Place Holder" class="logo-connexion">
      </div>
      <div id="conteneur">
         <form method="post" action="index.php?page=login&amp;a=connect">


            <label for="username">Identifiant:</label>
            <input type="text" placeholder="Adresse mail" id="mail" name="mail" required><br><br>
            <label for="password">Mot de passe:</label>
            <input type="password" placeholder="Mot de passe" id="password" name="password" required><br><br>
            <input type="submit" name="submit" value="Submit">
         </form>
      </div>
</body><?php }
}
