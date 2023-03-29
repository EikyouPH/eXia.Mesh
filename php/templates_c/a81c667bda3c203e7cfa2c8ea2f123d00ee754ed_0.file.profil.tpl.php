<?php
/* Smarty version 4.3.0, created on 2023-03-25 11:35:35
  from 'D:\Documents\Site Projet Web\eXia.Mesh\tpl\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641ece778db794_35758013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a81c667bda3c203e7cfa2c8ea2f123d00ee754ed' => 
    array (
      0 => 'D:\\Documents\\Site Projet Web\\eXia.Mesh\\tpl\\profil.tpl',
      1 => 1679679451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641ece778db794_35758013 (Smarty_Internal_Template $_smarty_tpl) {
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
                Date de naissance : <?php echo $_smarty_tpl->tpl_vars['date_naissance']->value;?>
<br>
                Adresse : <?php echo $_smarty_tpl->tpl_vars['numero']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['complement']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['rue']->value;?>
,<br>
                <?php echo $_smarty_tpl->tpl_vars['code_postal']->value;?>
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
                            <table>
                                <tr>
                                    <td class="icone">
                                        <img src="/img/linkedin.png" alt="">
                                    </td>
                                    <td>
                                        <a id="linkedin" href="<?php echo $_smarty_tpl->tpl_vars['lien_linkedin']->value;?>
"> LinkedIn</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table>
                                <tr>
                                    <td class="icone">
                                        <img src="/img/indeed.png" alt="">
                                    </td>
                                    <td>
                                        <a id="indeed" href="<?php echo $_smarty_tpl->tpl_vars['lien_indeed']->value;?>
"> Indeed</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td class="icone">
                                        <img src="/img/facebook.png" alt="">
                                    </td>
                                    <td>
                                        <a id="facebook" href="<?php echo $_smarty_tpl->tpl_vars['lien_facebook']->value;?>
"> Facebook</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table>
                                <tr>
                                    <td class="icone">
                                        <img src="/img/site.png" alt="">
                                    </td>
                                    <td>
                                        <a id="site-perso" href="<?php echo $_smarty_tpl->tpl_vars['lien_perso']->value;?>
"> Site
                                            personnel</a>
                                    </td>
                                </tr>
                            </table>
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
