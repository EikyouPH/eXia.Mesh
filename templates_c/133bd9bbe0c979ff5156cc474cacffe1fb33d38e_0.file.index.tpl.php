<?php
/* Smarty version 4.3.0, created on 2023-03-26 17:19:12
  from 'C:\Users\alani\OneDrive - Association Cesi Viacesi mail\Documents\CESI\2 - Deuxièrme année\4- Web\Projet\Site web\Projet-Web\tpl\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_642062701af715_55560867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '133bd9bbe0c979ff5156cc474cacffe1fb33d38e' => 
    array (
      0 => 'C:\\Users\\alani\\OneDrive - Association Cesi Viacesi mail\\Documents\\CESI\\2 - Deuxièrme année\\4- Web\\Projet\\Site web\\Projet-Web\\tpl\\index.tpl',
      1 => 1679843942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642062701af715_55560867 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="/css/connexion.css">
<link rel="stylesheet" href="/css/footer.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="manifest" href="../manifest.json">
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
