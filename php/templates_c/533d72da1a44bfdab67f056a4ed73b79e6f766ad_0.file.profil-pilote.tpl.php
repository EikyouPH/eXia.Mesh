<?php
/* Smarty version 4.3.0, created on 2023-03-26 16:21:33
  from 'C:\Users\alani\OneDrive - Association Cesi Viacesi mail\Documents\CESI\2 - Deuxièrme année\4- Web\Projet\Site web\Projet-Web\tpl\profil-pilote.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_642054ed265966_64637266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '533d72da1a44bfdab67f056a4ed73b79e6f766ad' => 
    array (
      0 => 'C:\\Users\\alani\\OneDrive - Association Cesi Viacesi mail\\Documents\\CESI\\2 - Deuxièrme année\\4- Web\\Projet\\Site web\\Projet-Web\\tpl\\profil-pilote.tpl',
      1 => 1679836168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642054ed265966_64637266 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="/css/profil.css">

<body>
    <table class="page-profil">
        <tr>
            <td class="personne">
                <img src="/img/personne.png" alt="Image du compte">
            </td>
            <td>
            Vous êtes Pilote<br><br>

                Nom : <?php echo $_smarty_tpl->tpl_vars['nom_utilisateur']->value;?>
<br>
                Prenom : <?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>
<br>
                Adresse mail : <?php echo $_smarty_tpl->tpl_vars['mail']->value;?>
<br>
                Pilote : <?php echo $_smarty_tpl->tpl_vars['nom_promo']->value;?>
 <br>
                <?php echo $_smarty_tpl->tpl_vars['nom_centre']->value;?>
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
