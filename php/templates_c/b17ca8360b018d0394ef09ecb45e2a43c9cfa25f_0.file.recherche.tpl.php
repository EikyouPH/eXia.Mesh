<?php
/* Smarty version 4.3.0, created on 2023-03-25 14:30:39
  from 'C:\Users\LudoK\OneDrive\CESI\A2\Web\projet\Projet-Web\tpl\recherche.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641ef77f693657_38057087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b17ca8360b018d0394ef09ecb45e2a43c9cfa25f' => 
    array (
      0 => 'C:\\Users\\LudoK\\OneDrive\\CESI\\A2\\Web\\projet\\Projet-Web\\tpl\\recherche.tpl',
      1 => 1679734559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641ef77f693657_38057087 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="/css/recherche.css">

<body>
    <table class = "cadre recherche">
        <tr>
            <td>
                <input type="search" id="barre" placeholder="Recherche...">
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" id="stage" name="Stage" checked>Stage
            </td>
            <td>
                <input type="checkbox" id="personne" name="Personne">Personne
            </td>
            <td>
                <input type="checkbox" id="entreprise" name="Entreprise">Entreprise
            </td>
        </tr>
        
    </table>
</body><?php }
}
