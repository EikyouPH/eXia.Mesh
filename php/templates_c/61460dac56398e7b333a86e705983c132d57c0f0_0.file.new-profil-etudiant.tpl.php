<?php
/* Smarty version 4.3.0, created on 2023-03-29 09:05:25
  from 'C:\Users\LudoK\OneDrive\CESI\A2\Web\projet\Projet-Web\tpl\new-profil-etudiant.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6423e335bac699_84405097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61460dac56398e7b333a86e705983c132d57c0f0' => 
    array (
      0 => 'C:\\Users\\LudoK\\OneDrive\\CESI\\A2\\Web\\projet\\Projet-Web\\tpl\\new-profil-etudiant.tpl',
      1 => 1680048950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6423e335bac699_84405097 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="/css/listes-deroulantes.css">
<link rel="stylesheet" href="/css/edit.css">


<body>
    <table class="page-profil">
        <tr>
            <td class="personne">
                <img src="/img/personne.png" alt="Image du compte">
            </td>
            <td>
                <form method="post" autocomplete="off">
                    <label for="nom_utilisateur">Nom</label><br>
                    <input type="text" name="nom_utilisateur" id="nom_utilisateur" required><br>

                    <label for="prenom">Prénom</label><br>
                    <input type="text" name="prenom" id="prenom" required><br>

                    <label for="mail">Adresse mail</label><br>
                    <input type="mail" name="mail" id="mail" required><br>

                    <label for="password">Mot de passe</label><br>
                    <input type="password" name="password" id="password" required><br>

                    <label for="nom_promo">Promotion</label><br>
                    <table><br>
                        <tr>
                            <select name="nom_promo" id="nom_promo">
                                <option>A1</option>
                                <option>A2</option>
                                <option>A3</option>
                                <option>A4</option>
                                <option>A5</option>
                            </select>
                        </tr>
                    </table>

                    <label for="nom_centre">Centre</label><br>
                    <table><br>
                        <tr>
                            <select name="nom_centre" id="nom_centre">
                                <option>Strasbourg</option>
                                <option>Dijon</option>
                                <option>Nancy</option>
                                <option>Reims</option>
                                <option>Châteauroux</option>
                                <option>Orléans</option>
                                <option>Nanterre</option>
                                <option>La Défense</option>
                                <option>Arras</option>
                                <option>Lille</option>
                                <option>Caen</option>
                                <option>Rouen</option>
                                <option>Angoulême</option>
                                <option>Brest</option>
                                <option>La Rochelle</option>
                                <option>Le Mans</option>
                                <option>Nantes</option>
                                <option>Saint Nazaire</option>
                                <option>Aix-en-Provence</option>
                                <option>Grenoble</option>
                                <option>Lyon</option>
                                <option>Nice</option>
                                <option>Bordeaux</option>
                                <option>Montpellier</option>
                                <option>PAU</option>
                                <option>Toulouse</option>
                            </select>
                        </tr>
                    </table>

                    <label for="date_naissance">Date de naissance</label><br>
                    <input type="date" name="date_naissance" id="date_naissance" required><br>

                    <label for="numero">N°</label><br>
                    <input type="text" name="numero" id="numero" required><br>

                    <label for="complement">Complément</label><br>
                    <input type="text" name="complement" id="complement"><br>

                    <label for="rue">Rue</label><br>
                    <input type="text" name="rue" id="rue" required><br>

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
                                        <input type="text" name="lien_linkedin" id="lien_linkedin"><br>
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
                                        <input type="text" name="lien_indeed" id="lien_indeed"><br>
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
                                        <input type="text" name="lien_facebook" id="lien_facebook"><br>
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
                                        <input type="text" name="lien_perso" id="lien_perso"><br>
                                    </td>
                                </tr>
                                <div>
                                    <button href='profil.php' type="submit" name="submit" id="ok">Créer</button>
                                    <button href='profil.php' id="cancel">Annuler</button>
                                </div>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
            </form>
        </tr>
    </table>
    <!-- Script -->
    <?php echo '<script'; ?>
 src="/scripts/liste-pays.js"><?php echo '</script'; ?>
>
</body><?php }
}
