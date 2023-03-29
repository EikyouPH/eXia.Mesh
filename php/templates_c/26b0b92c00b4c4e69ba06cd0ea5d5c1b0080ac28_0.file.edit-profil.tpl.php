<?php
/* Smarty version 4.3.0, created on 2023-03-26 13:24:10
  from 'D:\Documents\Site Projet Web\eXia.Mesh\tpl\edit-profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64202b5ab64b31_29040384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26b0b92c00b4c4e69ba06cd0ea5d5c1b0080ac28' => 
    array (
      0 => 'D:\\Documents\\Site Projet Web\\eXia.Mesh\\tpl\\edit-profil.tpl',
      1 => 1679829768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64202b5ab64b31_29040384 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="/css/edit.css">
<link rel="stylesheet" href="/css/listes-deroulantes.css">
<?php echo '<script'; ?>
 src="/app.js"><?php echo '</script'; ?>
>
<body>
    <div class="en cadre">
        <table class="grand">
            <tr>
                <td id="personne">
                    <img src="/img/personne.png" alt="Image du compte">
                </td>
                <td class="infos">
                    <form method="post" autocomplete="off">
                        <label for="nom_utilisateur">Nom</label><br>
                        <input type="text" name="nom_utilisateur" id="nom_utilisateur" value="<?php echo $_smarty_tpl->tpl_vars['nom_utilisateur']->value;?>
"
                            required><br>
                        <label for="prenom">Prénom</label><br>
                        <input type="text" name="prenom" id="prenom" value="<?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>
" required><br>
                        <label for="mail">Adresse mail</label><br>
                        <input type="mail" name="mail" id="mail" value="<?php echo $_smarty_tpl->tpl_vars['mail']->value;?>
" required><br>
                        <label for="password">Mot de passe</label><br>
                        <input type="password" name="password" id="password" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" required><br>
                        <label for="date_naissance">Date de naissance</label><br>
                        <input type="date" name="date_naissance" id="date_naissance" value="<?php echo $_smarty_tpl->tpl_vars['date_naissance']->value;?>
"
                            required><br>
                </td>
                <td class="adresse">
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
                    <input type="number" name="code_postal" id="code_postal" value="<?php echo $_smarty_tpl->tpl_vars['code_postal']->value;?>
" required><br>
                    <label for="ville">Ville</label><br>
                    <input type="text" name="ville" id="ville" value="<?php echo $_smarty_tpl->tpl_vars['ville']->value;?>
" required><br>
                    <label for="region">Région</label><br>
                    <input type="text" name="region" id="region" value="<?php echo $_smarty_tpl->tpl_vars['region']->value;?>
" required><br>
                    <label for="pays">Pays</label><br>
                    <input type="text" name="nom_pays" id="nom_pays" value="<?php echo $_smarty_tpl->tpl_vars['pays']->value;?>
"><br>
                    <div>
                        <input type="text" id="pays" placeholder="Votre pays">
                    </div>
                    <ul class="list"></ul>
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
                                            <label for="Linkedin">Lien Linkedin</label><br>
                                            <input type="url" name="lien_linkedin" id="lien_linkedin"
                                                value="<?php echo $_smarty_tpl->tpl_vars['lien_linkedin']->value;?>
"><br>
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
                                            <label for="Indeed">Lien Indeed</label><br>
                                            <input type="url" name="lien_indeed" id="lien_indeed"
                                                value="<?php echo $_smarty_tpl->tpl_vars['lien_indeed']->value;?>
"><br>
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
                                            <label for="Facebook">Lien Facebook</label><br>
                                            <input type="url" name="lien_facebook" id="lien_facebook"
                                                value="<?php echo $_smarty_tpl->tpl_vars['lien_facebook']->value;?>
"><br>
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
                                            <label for="perso">Lien Site Personnel</label><br>
                                            <input type="url" name="lien_perso" id="lien_perso"
                                                value="<?php echo $_smarty_tpl->tpl_vars['lien_perso']->value;?>
"><br>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
                <table class=lien>
                    <tr>
                        <td class="ok">
                            <button href='profil.php' type="submit" name="submit" >Enregistrer</button>
                        </td>
                        <td class="annuler">
                            <a href='profil.php'>Annuler</a>
                        </td>
                    </tr>
                </table>
                </form>
            </tr>
        </table>
    </div>

    <p>
        Expériences passées
    </p>
    <!-- Script -->
    <?php echo '<script'; ?>
 src="/scripts/liste-pays.js"><?php echo '</script'; ?>
>
</body><?php }
}
