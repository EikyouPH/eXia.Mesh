<?php
/* Smarty version 4.3.0, created on 2023-03-24 15:21:45
  from 'D:\Documents\Site Projet Web\eXia.Mesh\tpl\stage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641db1f9da19e5_29767236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '872ee734d42fec32ab48661aa7b0529eafad2cc4' => 
    array (
      0 => 'D:\\Documents\\Site Projet Web\\eXia.Mesh\\tpl\\stage.tpl',
      1 => 1679667703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641db1f9da19e5_29767236 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="/css/style-stage.css">

<body>
    <table class="table_stage">
        <tr>
            <td colspan="3">
                <h2><?php echo $_smarty_tpl->tpl_vars['nom_stage']->value;?>
<h2>
            </td>
        </tr>
        <tr>    
            <td rowspan="3">
                Lieu du stage : <br> <?php echo $_smarty_tpl->tpl_vars['numero']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['complement']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['rue']->value;?>
, <br> <?php echo $_smarty_tpl->tpl_vars['code_postal']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['ville']->value;?>
, <br><?php echo $_smarty_tpl->tpl_vars['region']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['pays']->value;?>
 <br><br>
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
               Entreprise : <?php echo $_smarty_tpl->tpl_vars['entreprise']->value;?>
 + note
            </td>
            <td>
            Date de fin : <?php echo $_smarty_tpl->tpl_vars['date_fin']->value;?>

            </td>
        </tr>
        <tr>
            <td>
                Domaines : <?php echo $_smarty_tpl->tpl_vars['domaine1']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['domaine2']->value;?>

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
    <table class = bouton-postuler>
        <tr>
            <td>
                <a target="_blank" href="./postuler.php">Postuler</a>
            </td>
        </tr>
    </table>
    
</body><?php }
}
