<?php
/* Smarty version 4.3.0, created on 2023-03-22 14:40:26
  from 'C:\Users\LudoK\OneDrive\CESI\A2\Web\projet\Projet-Web\tpl\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641b054a5ff069_98378906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64dc7513743dddd17d1351347ab8e7247cc9727c' => 
    array (
      0 => 'C:\\Users\\LudoK\\OneDrive\\CESI\\A2\\Web\\projet\\Projet-Web\\tpl\\profil.tpl',
      1 => 1679492422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641b054a5ff069_98378906 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="/css/style-profil.css">

<body>
    <table class="page-profil">
        <tr>
            <td class="personne">
                <img src="/img/personne.png" alt="Image du compte">
            </td>
            <td>
                Nom : <?php echo $_smarty_tpl->tpl_vars['nom_utilisateur']->value;?>
<br>
                Prenom : <?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>
<br>
                Adresse mail : <?php echo $_smarty_tpl->tpl_vars['mail']->value;?>
<br>
                Password : <?php echo $_smarty_tpl->tpl_vars['password']->value;?>
<br>
                Date de naissance : <?php echo $_smarty_tpl->tpl_vars['date_naissance']->value;?>
<br>
                Adresse : <?php echo $_smarty_tpl->tpl_vars['numero']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['complement']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['rue']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['code_postal']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['ville']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['region']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['pays']->value;?>
<br>
            </td>
            <td id="td-reseaux">
                <table class="reseaux">
                    <a href="edit_profil.php"><img src="/img/stylo.png" alt="editer" id="crayon" width="40"></a>
                    <tr>
                        <td>
                            <div>
                                <a href="bonjourjesuisunlien.linkedin.fr" target="_blank"><img src="/img/linkedin.png"
                                        alt="linkedin" id="linkedin"></a>
                            </div>
                            <div>
                                <a href="bonjourjesuisunlien.linkedin.fr" target="_blank">LinkedIn</a>
                            </div>
                        </td>
                        <td>
                            <div>
                                <a href="bonjourjesuisunlien.indeed.fr" target="_blank"><img src="/img/indeed.png"
                                        alt="indeed" id="indeed"></a>
                            </div>
                            <div>
                                <a href="bonjourjesuisunlien.indeed.fr" target="_blank">Indeed</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <a href="bonjourjesuisunlien.facebook.fr" target="_blank"><img src="/img/facebook.png"
                                        alt="facebook" id="facebook"></a>
                            </div>
                            <div>
                                <a href="bonjourjesuisunlien.facebook.fr" target="_blank">Facebook</a>
                            </div>
                        </td>
                        <td>
                            <div>
                                <a href="bonjourjesuisunlien.site-personnel.fr" target="_blank"><img src="/img/site.png"
                                        alt="site" id="site-perso"></a>
                            </div>
                            <div>
                                <a href="bonjourjesuisunlien.site-personnel.fr" target="_blank">Site personnel</a>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <p>
        Expériences passées
    </p>
</body><?php }
}
