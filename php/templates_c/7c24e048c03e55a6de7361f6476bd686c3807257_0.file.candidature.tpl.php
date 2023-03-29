<?php
/* Smarty version 4.3.0, created on 2023-03-24 10:42:25
  from 'D:\Documents\Site Projet Web\eXia.Mesh\tpl\candidature.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641d7081c90277_37477708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c24e048c03e55a6de7361f6476bd686c3807257' => 
    array (
      0 => 'D:\\Documents\\Site Projet Web\\eXia.Mesh\\tpl\\candidature.tpl',
      1 => 1679583928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641d7081c90277_37477708 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="/css/candidature.css">

<body>
    <div>
        <table class="table_stage">
            <tr>
                <td colspan="3">
                    <h3><?php echo $_smarty_tpl->tpl_vars['nom_stage']->value;?>
<h3>
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
,
                    <?php echo $_smarty_tpl->tpl_vars['pays']->value;?>
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
            <tr>
                <td id="description" colspan="3">
                    <h2>Description du poste</h2>
                    <p><?php echo $_smarty_tpl->tpl_vars['detail']->value;?>
</p>
                    <?php echo $_smarty_tpl->tpl_vars['nombre_places']->value;?>
 places restantes
                </td>
            </tr>
        </table>

        <table class="table_candidature">
            <tr>
                <td>
                    <h4>Informations personnelles</h4>
                    Nom : <?php echo $_smarty_tpl->tpl_vars['nom_utilisateur']->value;?>
<br>
                    Prenom : <?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>
<br>
                    Adresse mail : <?php echo $_smarty_tpl->tpl_vars['mail']->value;?>
<br>
                    Date de naissance : <?php echo $_smarty_tpl->tpl_vars['date_naissance']->value;?>
<br>
                    Adresse : <?php echo $_smarty_tpl->tpl_vars['numero']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['complement']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['rue']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['code_postal']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['ville']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['region']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['pays']->value;?>
<br>
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Votre réponse</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
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
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <div id="liens">
                        <a href="/site2/CV/1">Votre CV</a>
                        <a href="/site2/lettre/1">Votre lettre de motivation</a>
                    </div>
        </table>
    </div>
</body><?php }
}
