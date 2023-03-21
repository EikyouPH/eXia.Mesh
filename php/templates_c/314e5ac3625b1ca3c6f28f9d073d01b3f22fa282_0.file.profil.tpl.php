<?php
/* Smarty version 4.3.0, created on 2023-03-21 15:34:19
  from 'C:\Users\alani\OneDrive - Association Cesi Viacesi mail\Documents\CESI\2 - Deuxièrme année\4- Web\Projet\Site web\Projet-Web\tpl\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6419c06b83af97_21816419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '314e5ac3625b1ca3c6f28f9d073d01b3f22fa282' => 
    array (
      0 => 'C:\\Users\\alani\\OneDrive - Association Cesi Viacesi mail\\Documents\\CESI\\2 - Deuxièrme année\\4- Web\\Projet\\Site web\\Projet-Web\\tpl\\profil.tpl',
      1 => 1679405066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6419c06b83af97_21816419 (Smarty_Internal_Template $_smarty_tpl) {
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
,<br> <?php echo $_smarty_tpl->tpl_vars['code_postal']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['ville']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['region']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['pays']->value;?>
<br>
            </td>
            <td id="td-reseaux">
                <table class="reseaux">
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td class="icone">
                                        <img src="/img/linkedin.png" alt="">
                                    </td>
                                    <td>
                                        <a id="linkedin" href="bonjourjesuisunlien.linkedin.fr"> LinkedIn</a>
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
                                        <a id="indeed" href="bonjourjesuisunlien.indeeed.fr"> Indeed</a>
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
                                        <a id="facebook" href="bonjourjesuisunlien.facebook.fr"> Facebook</a>
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
                                        <a id="site-perso" href="bonjourjesuisunlien.site-personnel.fr"> Site personnel</a>
                                    </td>
                                </tr>
                            </table>
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
    <a href="edit_profil.php"><img src="/img/stylo.png" alt="editer" id="img-edit" width="40"></a>
</body><?php }
}
