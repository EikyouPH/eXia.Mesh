<?php
/* Smarty version 4.3.0, created on 2023-03-25 14:42:05
  from 'C:\Users\alani\OneDrive - Association Cesi Viacesi mail\Documents\CESI\2 - Deuxièrme année\4- Web\Projet\Site web\Projet-Web\tpl\recherche.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641efa2da754e3_80295067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '072695e07030ff98bce005258f634769278166c6' => 
    array (
      0 => 'C:\\Users\\alani\\OneDrive - Association Cesi Viacesi mail\\Documents\\CESI\\2 - Deuxièrme année\\4- Web\\Projet\\Site web\\Projet-Web\\tpl\\recherche.tpl',
      1 => 1679751715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641efa2da754e3_80295067 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="/css/recherche.css">

<body>
    <div class="cadre">
        <div class="cadre recherche">
            <table>

                <form>
                    <tr>
                        <td>
                            <input type="search" id="barre" placeholder="Recherche...">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="sat" value="Oui" checked="checked">Stage
                            <input type="radio" name="sat" value="Non">Personne
                            <input type="radio" name="sat" value="Non">Entreprise
                        </td>
                    </tr>
                </form>
            </table>
        </div>
        <tr>
            <td>
                <div class="header">
                    <div class="titre">Création d'application</div>
                    <div class="entreprise">PSG</div>
                </div>
                <div class="contenu">
                    <a href="wishlist.php" target="_blank">
                        <div class="texte">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Sed
                            euismod,
                            nisl sit amet ultricies lacinia, nisl nisl aliquam nisl, eget aliquam nisl nisl sit
                            amet
                            nisl.
                            Sed euismod, nisl sit amet ultricies lacinia, nisl nisl aliquam nisl, eget aliquam
                            nisl
                            nisl
                            sit
                            amet nisl.
                        </div>
                        <div class="lien"><a href="#"><img src="/img/fleche-droite.svg" alt="Fleche vers la droite"></a>
                        </div>
                    </a>
                </div>
            </td>
        </tr>


    </div>
</body><?php }
}
