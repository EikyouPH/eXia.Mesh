<?php
/* Smarty version 4.3.0, created on 2023-03-29 09:10:54
  from 'C:\Users\LudoK\OneDrive\CESI\A2\Web\projet\Projet-Web\tpl\new-profil-admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6423e47ecd0b51_30231208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d2a059a675ecbeb18100ebcc635a3c5c399cdd9' => 
    array (
      0 => 'C:\\Users\\LudoK\\OneDrive\\CESI\\A2\\Web\\projet\\Projet-Web\\tpl\\new-profil-admin.tpl',
      1 => 1680048982,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6423e47ecd0b51_30231208 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="/css/edit.css">
<link rel="stylesheet" href="/css/listes-deroulantes.css">

<body>
    <div class="en cadre">
        <table class = "grand">
            <tr>
                <td id="personne">
                    <img src="/img/personne.png" alt="Image du compte">
                </td>
                <td class = "infos">
                    <form method="post" autocomplete="off">
                        <label for="nom_utilisateur">Nom</label><br>
                        <input type="text" name="nom_utilisateur" id="nom_utilisateur"
                            required><br>
                        <label for="prenom">Prénom</label><br>
                        <input type="text" name="prenom" id="prenom" required><br>
                        <label for="mail">Adresse mail</label><br>
                        <input type="mail" name="mail" id="mail"  required><br>
                        <label for="password">Mot de passe</label><br>
                        <input type="password" name="password" id="password"  required><br>
                        <label for="date_naissance">Date de naissance</label><br>
                        <input type="date" name="date_naissance" id="date_naissance"
                            required><br>
                    </td>
                    <td class="adresse">  
                        <label for="numero">N°</label><br>
                        <input type="text" name="numero" id="numero" required><br>
                        <label for="complement">Complément</label><br>
                        <input type="text" name="complement" id="complement" ><br>
                        <label for="rue">Rue</label><br>
                        <input type="text" name="rue" id="rue" ><br>
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
                    </table>
                </td>
                <button href='profil.php' type="submit" name="submit" class = "ok">Créer</button>
                <button href='profil.php' class= "ok"> Annuler</button>
                </form>
            </tr>
        </table>
    </div>
    <!-- Script -->
    <?php echo '<script'; ?>
 src="/scripts/liste-pays.js"><?php echo '</script'; ?>
>
</body><?php }
}
