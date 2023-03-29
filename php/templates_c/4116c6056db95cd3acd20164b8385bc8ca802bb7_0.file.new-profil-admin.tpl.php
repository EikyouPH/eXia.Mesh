<?php
/* Smarty version 4.3.0, created on 2023-03-29 09:00:56
  from 'C:\Users\alani\OneDrive - Association Cesi Viacesi mail\Documents\CESI\2 - Deuxièrme année\4- Web\Projet\Site web\Projet-Web\tpl\new-profil-admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6423e228611e07_43914003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4116c6056db95cd3acd20164b8385bc8ca802bb7' => 
    array (
      0 => 'C:\\Users\\alani\\OneDrive - Association Cesi Viacesi mail\\Documents\\CESI\\2 - Deuxièrme année\\4- Web\\Projet\\Site web\\Projet-Web\\tpl\\new-profil-admin.tpl',
      1 => 1680073246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6423e228611e07_43914003 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="/css/edit.css">
<link rel="stylesheet" href="/css/listes-deroulantes.css">

<body>
    <div class="en cadre">
        <table class="grand">
            <tr>
                <form method="post" autocomplete="off">
                    <td id="personne">
                        <img src="/img/personne.png" alt="Image du compte">
                    </td>
                    <td class="infos">
                        <label for="nom_utilisateur">Nom</label><br>
                        <input type="text" name="nom_utilisateur" id="nom_utilisateur" required><br>

                        <label for="prenom">Prénom</label><br>
                        <input type="text" name="prenom" id="prenom" required><br>

                        <label for="mail">Adresse mail</label><br>
                        <input type="mail" name="mail" id="mail" required><br>

                        <label for="password">Mot de passe</label><br>
                        <input type="password" name="password" id="password" required><br>

                        <label for="date_naissance">Date de naissance</label><br>
                        <input type="date" name="date_naissance" id="date_naissance" required><br>
                    </td>
                    <td class="adresse">
                        <label for="numero">N°</label><br>
                        <input type="text" name="numero" id="numero" required><br>

                        <label for="complement">Complément</label><br>
                        <input type="text" name="complement" id="complement"><br>

                        <label for="rue">Rue</label><br>
                        <input type="text" name="rue" id="rue"><br>

                        <label for="code_postal">Code postal</label><br>
                        <input type="number" name="code_postal" id="code_postal" required><br>

                        <label for="ville">Ville</label><br>
                        <input type="text" name="ville" id="ville" required><br>

                        <label for="region">Région</label><br>
                        <input type="text" name="region" id="region" required><br>

                        <label for="pays">Pays</label><br>
                        <input type="text" name="nom_pays" id="pays" placeholder="Votre pays..."><br>
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
                                                <input type="url" name="lien_linkedin" id="lien_linkedin"><br>
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
                                                <input type="url" name="lien_indeed" id="lien_indeed"><br>
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
                                                <input type="url" name="lien_facebook" id="lien_facebook"><br>
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
                                                <input type="url" name="lien_perso" id="lien_perso"><br>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td class="boutons">
                                    <button href='profil.php' type="submit" name="submit"
                                        id="confirmer">Enregistrer</button>
                                    <button href='profil.php' id="annuler">Annuler</button>
                                    <button href='profil.php' type="submit" name="delete">Supprimer le compte</button>
                                </td>
                            </tr>
                        </table>
                    </td>
                </form>
            </tr>
        </table>
    </div>
    <?php echo '<script'; ?>
 src="/scripts/liste-pays.js"><?php echo '</script'; ?>
>
</body><?php }
}
