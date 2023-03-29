<?php
/* Smarty version 4.3.0, created on 2023-03-26 16:52:05
  from 'C:\Users\LudoK\OneDrive\CESI\A2\Web\projet\Projet-Web\tpl\wishlist-liste.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64205c1581ca13_51513709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b41932cc593fcf7540b0c8d4426a3a1b944a5960' => 
    array (
      0 => 'C:\\Users\\LudoK\\OneDrive\\CESI\\A2\\Web\\projet\\Projet-Web\\tpl\\wishlist-liste.tpl',
      1 => 1679783044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64205c1581ca13_51513709 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="/css/wishlist.css">

<body>

    <h2> Vos Wishlists</h2>
    <table class="wishlist">
        <a href="wishlist-liste.php" target="_blank">
            <tr>
                <td>
                    <div class="header">
                        <div class="titre">Wishlist 1</div>
                        <div class="nombre">3</div>
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
                                amet nisl.</div>
                            <div class="lien"><a href="#"><img src="/img/fleche-droite.svg"
                                        alt="Fleche vers la droite"></a>
                            </div>
                        </a>
                    </div>
                </td>
            </tr>
    </table>
</body><?php }
}
