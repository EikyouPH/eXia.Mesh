<?php
/* Smarty version 4.3.0, created on 2023-03-24 16:13:18
  from 'C:\Users\alani\OneDrive - Association Cesi Viacesi mail\Documents\CESI\2 - Deuxièrme année\4- Web\Projet\Site web\Projet-Web\tpl\postuler.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641dbe0e5389f1_01586973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8beef93905a959b71d83d3b5159a3d751eabb011' => 
    array (
      0 => 'C:\\Users\\alani\\OneDrive - Association Cesi Viacesi mail\\Documents\\CESI\\2 - Deuxièrme année\\4- Web\\Projet\\Site web\\Projet-Web\\tpl\\postuler.tpl',
      1 => 1679670797,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641dbe0e5389f1_01586973 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="/css/postuler.css">

<body>
    <form method="post">
        <label for="nom_utilisateur">Nom</label><br>
        <input type="text" name="nom_utilisateur" id="nom_utilisateur" value="<?php echo $_smarty_tpl->tpl_vars['nom_utilisateur']->value;?>
" required><br>

        <label for="prenom">Prénom</label><br>
        <input type="text" name="prenom" id="prenom" value="<?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>
" required><br>
        <label for="mail">Adresse mail</label><br>
        <input type="text" name="mail" id="mail" value="<?php echo $_smarty_tpl->tpl_vars['mail']->value;?>
" required><br>
        <label for="date_naissance">Date de naissance</label><br>
        <input type="text" name="date_naissance" id="date_naissance" value="<?php echo $_smarty_tpl->tpl_vars['date_naissance']->value;?>
" required><br>
        <label for="lettre-motivation">Lettre de motivation</label><br>
        <textarea class="redimensionnable type=" text" name="lettre-motivation" id="lettre-motivation"
            value="<?php echo $_smarty_tpl->tpl_vars['lettre_motivation']->value;?>
" required><?php echo $_smarty_tpl->tpl_vars['lettre_motivation']->value;?>
</textarea><br>
    </form>

    <table class="lien">
        <tr>
            <td>
                <a target="_blank" href="./postuler.php">Envoyer</a>
            </td>
            <td>
                <a target="_blank" href="./postuler.php">Annuler</a>
            </td>
        </tr>
    </table>
</body><?php }
}
