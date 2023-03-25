<?php
/* Smarty version 4.3.0, created on 2023-03-25 23:19:03
  from 'C:\Users\LudoK\OneDrive\CESI\A2\Web\projet\Projet-Web\tpl\recherche.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641f7357ab44e5_11842610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b17ca8360b018d0394ef09ecb45e2a43c9cfa25f' => 
    array (
      0 => 'C:\\Users\\LudoK\\OneDrive\\CESI\\A2\\Web\\projet\\Projet-Web\\tpl\\recherche.tpl',
      1 => 1679756273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641f7357ab44e5_11842610 (Smarty_Internal_Template $_smarty_tpl) {
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
