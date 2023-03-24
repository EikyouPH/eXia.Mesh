<?php
/* Smarty version 4.3.0, created on 2023-03-24 17:03:44
  from 'C:\Users\alani\OneDrive - Association Cesi Viacesi mail\Documents\CESI\2 - Deuxièrme année\4- Web\Projet\Site web\Projet-Web\tpl\recherche.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641dc9e04c4e21_68634031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '072695e07030ff98bce005258f634769278166c6' => 
    array (
      0 => 'C:\\Users\\alani\\OneDrive - Association Cesi Viacesi mail\\Documents\\CESI\\2 - Deuxièrme année\\4- Web\\Projet\\Site web\\Projet-Web\\tpl\\recherche.tpl',
      1 => 1679673758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641dc9e04c4e21_68634031 (Smarty_Internal_Template $_smarty_tpl) {
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
