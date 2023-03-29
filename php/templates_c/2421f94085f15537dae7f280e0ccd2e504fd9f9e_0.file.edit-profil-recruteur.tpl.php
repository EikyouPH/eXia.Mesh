<?php
/* Smarty version 4.3.0, created on 2023-03-29 02:10:44
  from 'C:\Users\LudoK\OneDrive\CESI\A2\Web\projet\Projet-Web\tpl\edit-profil-recruteur.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64238204b01432_96137418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2421f94085f15537dae7f280e0ccd2e504fd9f9e' => 
    array (
      0 => 'C:\\Users\\LudoK\\OneDrive\\CESI\\A2\\Web\\projet\\Projet-Web\\tpl\\edit-profil-recruteur.tpl',
      1 => 1680044869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64238204b01432_96137418 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="/css/edit.css">
<link rel="stylesheet" href="/css/listes-deroulantes.css">

<body>
    <div class="en cadre">
        <table>
            <tr>
                <form method="post" autocomplete="off">
                    <td id="personne">
                        <img src="/img/personne.png" alt="Image du compte">
                    </td>
                    <td class="infos">
                        <label for="nom_utilisateur">Nom</label><br>
                        <input type="text" name="nom_utilisateur" id="nom_utilisateur" value="<?php echo $_smarty_tpl->tpl_vars['nom_utilisateur']->value;?>
"
                            required><br>

                        <label for="prenom">Prénom</label><br>
                        <input type="text" name="prenom" id="prenom" value="<?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>
" required><br>

                        <label for="nom_entreprise">Entreprise</label><br>
                        <input type="text" name="nom_entreprise" id="nom_entreprise" value="<?php echo $_smarty_tpl->tpl_vars['nom_entreprise']->value;?>
"><br>

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
                        <input type="text" name="nom_pays" id="pays" value="<?php echo $_smarty_tpl->tpl_vars['pays']->value;?>
" placeholder="Votre pays..."><br>
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
                                                <label for="lien_linkedin">Lien Linkedin</label><br>
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
                                                <label for="lien_indeed">Lien Indeed</label><br>
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
                                                <label for="lien_facebook">Lien Facebook</label><br>
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
                                                <label for="lien_perso">Lien Site Personnel</label><br>
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
                    <button href='profil.php' type="submit" name="submit">Enregistrer</button>
                    <button href='profil.php'> Annuler</button>
                </form>
            </tr>
        </table>
    </div>
    <?php echo '<script'; ?>
 src="/scripts/liste-pays.js"><?php echo '</script'; ?>
>
</body><?php }
}
