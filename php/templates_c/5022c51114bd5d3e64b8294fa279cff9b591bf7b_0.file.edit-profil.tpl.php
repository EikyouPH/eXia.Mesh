<?php
/* Smarty version 4.3.0, created on 2023-03-24 16:22:16
  from 'C:\Users\alani\OneDrive - Association Cesi Viacesi mail\Documents\CESI\2 - Deuxièrme année\4- Web\Projet\Site web\Projet-Web\tpl\edit-profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641dc02893b9b4_92637071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5022c51114bd5d3e64b8294fa279cff9b591bf7b' => 
    array (
      0 => 'C:\\Users\\alani\\OneDrive - Association Cesi Viacesi mail\\Documents\\CESI\\2 - Deuxièrme année\\4- Web\\Projet\\Site web\\Projet-Web\\tpl\\edit-profil.tpl',
      1 => 1679671286,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641dc02893b9b4_92637071 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="/css/style-edit.css">

<body>
    <table class="page-profil">
        <tr>
            <td class="personne">
                <img src="/img/personne.png" alt="Image du compte">
            </td>
            <td>
                <form method="post">
                    <label for="nom_utilisateur">Nom</label><br>
                    <input type="text" name="nom_utilisateur" id="nom_utilisateur" value="<?php echo $_smarty_tpl->tpl_vars['nom_utilisateur']->value;?>
"
                        required><br>

                    <label for="prenom">Prénom</label><br>
                    <input type="text" name="prenom" id="prenom" value="<?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>
" required><br>
                    <label for="mail">Adresse mail</label><br>
                    <input type="text" name="mail" id="mail" value="<?php echo $_smarty_tpl->tpl_vars['mail']->value;?>
" required><br>
                    <label for="password">Mot de passe</label><br>
                    <input type="text" name="password" id="password" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" required><br>
                    <label for="date_naissance">Date de naissance</label><br>
                    <input type="text" name="date_naissance" id="date_naissance" value="<?php echo $_smarty_tpl->tpl_vars['date_naissance']->value;?>
" required><br>
                    <label for="numero">N°</label><br>
                    <input type="text" name="numero" id="numero" value="<?php echo $_smarty_tpl->tpl_vars['numero']->value;?>
" required><br>
                    <label for="complement">Complément</label><br>
                    <input type="text" name="complement" id="complement" value="<?php echo $_smarty_tpl->tpl_vars['complement']->value;?>
"><br>
                    <label for="rue">Rue</label><br>
                    <input type="text" name="rue" id="rue" value="<?php echo $_smarty_tpl->tpl_vars['rue']->value;?>
" required><br>
                    <label for="code_postal">Code postal</label><br>
                    <input type="text" name="code_postal" id="code_postal" value="<?php echo $_smarty_tpl->tpl_vars['code_postal']->value;?>
" required><br>
                    <label for="ville">Ville</label><br>
                    <input type="text" name="ville" id="ville" value="<?php echo $_smarty_tpl->tpl_vars['ville']->value;?>
" required><br>
                    <label for="region">Région</label><br>
                    <input type="text" name="region" id="region" value="<?php echo $_smarty_tpl->tpl_vars['region']->value;?>
" required><br>
                    <label for="nom_pays">Pays</label><br>
                    <input type="text" name="nom_pays" id="nom_pays" value="<?php echo $_smarty_tpl->tpl_vars['pays']->value;?>
" required><br>
                </form>
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
                                        <label for="nom_pays">Lien Linkedin</label><br>
                                        <input type="text" name="nom_pays" id="nom_pays" value="<?php echo $_smarty_tpl->tpl_vars['lien_linkedin']->value;?>
" required><br>
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
                                        <img src="/img/indeed.png" alt="">
                                    </td>
                                    <td>
                                        <label for="nom_pays">Lien Indeed</label><br>
                                        <input type="text" name="nom_pays" id="nom_pays" value="<?php echo $_smarty_tpl->tpl_vars['lien_indeed']->value;?>
" required><br>
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
                                        <label for="nom_pays">Lien Facebook</label><br>
                                        <input type="text" name="nom_pays" id="nom_pays" value="<?php echo $_smarty_tpl->tpl_vars['lien_facebook']->value;?>
" required><br>
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
                                        <img src="/img/site.png" alt="">
                                    </td>
                                    <td>
                                        <label for="nom_pays">Lien Site Personnel</label><br>
                                        <input type="text" name="nom_pays" id="nom_pays" value="<?php echo $_smarty_tpl->tpl_vars['lien_perso']->value;?>
" required><br>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <button type="submit" name="submit" class="a">Enregistrer</button>
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
