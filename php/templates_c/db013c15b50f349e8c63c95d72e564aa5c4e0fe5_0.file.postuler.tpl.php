<?php
/* Smarty version 4.3.0, created on 2023-03-24 15:31:06
  from 'D:\Documents\Site Projet Web\eXia.Mesh\tpl\postuler.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641db42ae1e758_10442883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db013c15b50f349e8c63c95d72e564aa5c4e0fe5' => 
    array (
      0 => 'D:\\Documents\\Site Projet Web\\eXia.Mesh\\tpl\\postuler.tpl',
      1 => 1679668257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641db42ae1e758_10442883 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="/css/postuler.css">

<body>
    <form id="postuler" method="post">
        <label for="nom_utilisateur">Nom</label><br>
        <input type="text" name="nom_utilisateur" id="nom_utilisateur" value="<?php echo $_smarty_tpl->tpl_vars['nom_utilisateur']->value;?>
" required><br>

        <label for="prenom">Prénom</label><br>
        <input type="text" name="prenom" id="prenom" value="<?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>
" required><br>
        <label for="mail">Adresse mail</label><br>
        <input type="mail" name="mail" id="mail" value="<?php echo $_smarty_tpl->tpl_vars['mail']->value;?>
" required><br>
        <label for="date_naissance">Date de naissance</label><br>
        <input type="date" name="date_naissance" id="date_naissance" value="<?php echo $_smarty_tpl->tpl_vars['date_naissance']->value;?>
" required><br>
        <label for="lettre-motivation">Lettre de motivation</label><br>
        <input type="text" name="lettre-motivation" id="lettre-motivation" value="<?php echo $_smarty_tpl->tpl_vars['lettre_motivation']->value;?>
" required><br>
</form><?php }
}
