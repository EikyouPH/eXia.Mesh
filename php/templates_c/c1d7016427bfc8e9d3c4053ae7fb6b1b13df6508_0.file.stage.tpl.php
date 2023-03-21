<?php
/* Smarty version 4.3.0, created on 2023-03-21 22:14:10
  from 'D:\Documents\Site Projet Web\Projet-Web\tpl\stage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641a1e22e93c98_15693538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1d7016427bfc8e9d3c4053ae7fb6b1b13df6508' => 
    array (
      0 => 'D:\\Documents\\Site Projet Web\\Projet-Web\\tpl\\stage.tpl',
      1 => 1679433249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641a1e22e93c98_15693538 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="/css/style-stage.css">

<body>
    <table class="table_stage">
        <tr>
            <td>
                Nom de stage
            </td>
            <td rowspan="3">
                Lieu du stage : <?php echo $_smarty_tpl->tpl_vars['numero']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['complement']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['rue']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['code_postal']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['ville']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['region']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['pays']->value;?>
 <br>
                Durée : <?php echo $_smarty_tpl->tpl_vars['duree']->value;?>
 <br>
                Rémunération : <?php echo $_smarty_tpl->tpl_vars['remuneration']->value;?>
 €/h
            </td>
            <td>
                Date de début : <?php echo $_smarty_tpl->tpl_vars['date_debut']->value;?>

            </td>

        </tr>
        <tr>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['entreprise']->value;?>
 + note
            </td>
            <td>
            Date de fin : <?php echo $_smarty_tpl->tpl_vars['date_fin']->value;?>

            </td>
        </tr>
        <tr>
            <td>
                Domaines : <?php echo $_smarty_tpl->tpl_vars['domaine1']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['domaine2']->value;?>

            </td>
            <td>
            Date de publication : <?php echo $_smarty_tpl->tpl_vars['date_publication']->value;?>

            </td>
        </tr>
    </table>

    <div id="description">
        <h2>Description du poste</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['detail']->value;?>
</p>
        <?php echo $_smarty_tpl->tpl_vars['nombre_places']->value;?>
 places restantes
    </div>
    

</body><?php }
}
