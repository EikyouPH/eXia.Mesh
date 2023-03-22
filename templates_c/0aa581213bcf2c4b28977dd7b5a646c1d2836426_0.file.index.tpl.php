<?php
/* Smarty version 4.3.0, created on 2023-03-22 14:49:30
  from 'C:\Users\LudoK\OneDrive\CESI\A2\Web\projet\Projet-Web\tpl\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641b076a6a0741_83413473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0aa581213bcf2c4b28977dd7b5a646c1d2836426' => 
    array (
      0 => 'C:\\Users\\LudoK\\OneDrive\\CESI\\A2\\Web\\projet\\Projet-Web\\tpl\\index.tpl',
      1 => 1679473416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641b076a6a0741_83413473 (Smarty_Internal_Template $_smarty_tpl) {
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
