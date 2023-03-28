<?php
/* Smarty version 4.3.0, created on 2023-03-27 22:28:16
  from 'D:\Documents\Site Projet Web\eXia.Mesh\tpl\recherche.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6421fc6010f886_08372094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cd0b011e808d482d3410ce827e9beaa3145fe07' => 
    array (
      0 => 'D:\\Documents\\Site Projet Web\\eXia.Mesh\\tpl\\recherche.tpl',
      1 => 1679948887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6421fc6010f886_08372094 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="/css/recherche.css">

<body>
    <div class="cadre">
        <div class="cadre-recherche">
            <table id="recherche">
                <form>
                    <tr>
                        <td>
                            <input type="search" id="barre" placeholder="Recherche...">
                        </td>
                    </tr>
                    <tr>
                        <td id="choix">
                            <input type="radio" name="sat" value="Oui" checked="checked">Stage
                            <input type="radio" name="sat" value="Non">Personne
                            <input type="radio" name="sat" value="Non">Entreprise
                        </td>
                    </tr>
                </form>
            </table>
        </div>
        <table class="resultat">
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
                            <div class="lien"><a href="#"><img src="/img/fleche-droite.svg"
                                        alt="Fleche vers la droite"></a>
                            </div>
                        </a>
                    </div>
                </td>
            </tr>
        </table>

    </div>
</body><?php }
}
