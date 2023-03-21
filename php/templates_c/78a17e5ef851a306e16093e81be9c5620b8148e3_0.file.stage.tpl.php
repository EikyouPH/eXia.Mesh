<?php
/* Smarty version 4.3.0, created on 2023-03-21 20:12:08
  from 'C:\Users\alani\OneDrive - Association Cesi Viacesi mail\Documents\CESI\2 - Deuxièrme année\4- Web\Projet\Site web\Projet-Web\tpl\stage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641a0188abc589_87553457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78a17e5ef851a306e16093e81be9c5620b8148e3' => 
    array (
      0 => 'C:\\Users\\alani\\OneDrive - Association Cesi Viacesi mail\\Documents\\CESI\\2 - Deuxièrme année\\4- Web\\Projet\\Site web\\Projet-Web\\tpl\\stage.tpl',
      1 => 1679425927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641a0188abc589_87553457 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="/css/style-stage.css">

<body>
    <table>
        <tr>
            <td>
                <h2>Nom de stage</h2>
            </td>
            <td rowspan="3">
                <?php echo $_smarty_tpl->tpl_vars['numero']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['complement']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['rue']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['code_postal']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['ville']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['region']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['pays']->value;?>
 <br> <?php echo $_smarty_tpl->tpl_vars['duree']->value;?>
 <br> <?php echo $_smarty_tpl->tpl_vars['remuneration']->value;?>

            </td>
        </tr>
        <tr>
            <td>
                Nome entreprise + avis
            </td>
        </tr>
        <tr>
            <td>
                Domaines
            </td>
        </tr>
    </table>

    <div>
        <h2>Description du poste</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, sed numquam? Praesentium culpa enim porro
            odio doloribus mollitia. Quam voluptates optio tenetur incidunt perferendis doloribus quasi, dignissimos
            facilis enim ratione. Magni illo aspernatur iure quidem vero autem fugiat a culpa, ducimus amet vitae alias
            magnam corrupti dolorum consequuntur. Officia impedit minima asperiores enim et placeat, eveniet libero quae
            facere voluptatem. Sed iure velit quo reprehenderit aliquam in ipsa excepturi deserunt sint! Repellendus
            mollitia est accusamus hic? Corporis in, fugit ipsum reiciendis aut fuga exercitationem doloremque sed nobis
            culpa, cum debitis! Officiis minima consequatur, dolorem itaque fugit incidunt ratione nobis, dignissimos
            libero consectetur voluptate eos sint deleniti ipsam possimus inventore modi, est magnam voluptatum rerum
            laudantium quaerat dolores asperiores? Mollitia, quidem. Omnis praesentium error dicta voluptate. Voluptate
            repellat nobis animi, molestias nihil alias ipsam corporis incidunt fugiat maiores iste harum veritatis unde
            adipisci? Esse voluptas voluptatum asperiores temporibus maxime repellat eos?
        </p>
    </div>

</body><?php }
}
