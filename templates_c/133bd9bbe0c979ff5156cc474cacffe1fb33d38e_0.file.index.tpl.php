<?php
/* Smarty version 4.3.0, created on 2023-03-28 23:06:27
  from 'C:\Users\alani\OneDrive - Association Cesi Viacesi mail\Documents\CESI\2 - Deuxièrme année\4- Web\Projet\Site web\Projet-Web\tpl\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_642356d3e75ba5_44120468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '133bd9bbe0c979ff5156cc474cacffe1fb33d38e' => 
    array (
      0 => 'C:\\Users\\alani\\OneDrive - Association Cesi Viacesi mail\\Documents\\CESI\\2 - Deuxièrme année\\4- Web\\Projet\\Site web\\Projet-Web\\tpl\\index.tpl',
      1 => 1680035574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642356d3e75ba5_44120468 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Connexion</title>
   <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
   <link rel="stylesheet" href="/css/connexion.css">
   <link rel="stylesheet" href="/css/footer.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
   <link rel="manifest" href="../manifest.json">
   <link rel="apple-touch-icon" href="/img/logo152x152.png">
   <meta name="theme-color" content="#0E8388">
</head>

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
