<?php
/* Smarty version 4.3.0, created on 2023-03-29 10:15:35
  from 'C:\Users\LudoK\OneDrive\CESI\A2\Web\projet\Projet-Web\tpl\entreprise.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6423f3a79de635_66430130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6c0854d8918ce5975eebcd8f0b17fd485bc95f8' => 
    array (
      0 => 'C:\\Users\\LudoK\\OneDrive\\CESI\\A2\\Web\\projet\\Projet-Web\\tpl\\entreprise.tpl',
      1 => 1680077714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6423f3a79de635_66430130 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="/css/entreprise.css">

<body>
    <div class="en cadre">
        <div class="en cadre">
            <table>
                <tr>
                    <td id="infos">
                        <img src="/img/personne.png" alt="Image de l'entreprise" id="image">
                    </td>
                    <td>
                        Nom : <?php echo $_smarty_tpl->tpl_vars['nom_entreprise']->value;?>
<br>
                        Site web : <?php echo $_smarty_tpl->tpl_vars['site_web']->value;?>
<br>
                        Adresse mail de contact : <?php echo $_smarty_tpl->tpl_vars['mail_contact']->value;?>
<br>
                        Numéro de téléphone : <?php echo $_smarty_tpl->tpl_vars['numero_tel']->value;?>
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
            </table>
        </div>
        <br>
        <div class="contenu">
            <h2>Présentation générale</h2>
            <p> 
            <?php echo $_smarty_tpl->tpl_vars['presentation']->value;?>

            </p>
        </div>
        <div class="contenu">
            <h2>Informations de l'entreprise</h2>
            <p><?php echo $_smarty_tpl->tpl_vars['information']->value;?>
 </p>
        </div>
        <div>
            <h2>Offres en cours</h2>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, molestias aperiam tempore, unde
                recusandae similique earum nihil, nobis accusantium quis error soluta! Qui quis dolores est magnam
                officiis
                deserunt quod!
                Ipsam, voluptate cumque? Similique quos quisquam deserunt maiores dolorum et tenetur rem sunt architecto
                minima. Odio perspiciatis quod reprehenderit harum at dicta eligendi debitis? Magni aliquid optio in
                repellendus sequi.
                Nemo neque sint omnis cupiditate aspernatur architecto suscipit ab ipsam sed inventore provident
                quibusdam
                hic dolores ducimus in facere, amet distinctio expedita incidunt voluptates velit doloribus? Dolorum
                nisi
                odio fugit.
                Totam rem error ut aspernatur dolorem? Omnis magnam, amet culpa iusto labore ab corporis sequi illo
                accusantium minima veritatis nostrum voluptatum aspernatur adipisci exercitationem suscipit natus porro
                blanditiis beatae error.
                Perferendis error laboriosam vitae doloremque ratione, voluptatem quod et, a optio veniam excepturi
                veritatis unde sint commodi, dolore harum dolores dolorum quos deserunt alias enim? Maiores provident
                repellendus voluptatem excepturi.
                Dignissimos quidem nemo sunt assumenda impedit, labore numquam beatae corporis commodi dolor explicabo,
                culpa saepe consequatur illo magnam molestiae minima esse sequi provident blanditiis, aut a. Corporis
                consectetur ullam velit!
                Rem sapiente quidem aut soluta laboriosam expedita culpa, officiis aliquid facere similique recusandae
                laudantium repudiandae, tempora possimus atque iure eligendi alias quis pariatur dolor at. Saepe quasi
                iure
                magnam accusantium!
                Totam dolore tenetur perspiciatis possimus aperiam reprehenderit veritatis. Laboriosam, est minima.
                Totam,
                quidem commodi. Voluptate reprehenderit consectetur, quos illum architecto nisi laboriosam eligendi,
                nihil
                ab minima natus omnis voluptatem quas.
                Dolores ducimus at voluptatibus. Porro modi nam natus iste ipsam odit voluptas a incidunt. Itaque
                explicabo
                quo fugit, ipsum maiores vel sed numquam consequuntur maxime, ullam dolore voluptate quae tempore.
                A beatae laborum non. Facilis, nemo, libero aperiam qui ex perferendis ipsa rem labore eveniet corporis
                voluptatum illum reiciendis dolore, minus fugit laborum repudiandae. Possimus veniam nulla quod velit
                fugiat. </p>
        </div>
        <div class="en cadre">
            <h2>Avis</h2>
            <p>
                Note : <?php echo $_smarty_tpl->tpl_vars['note']->value;?>
 <br>
                Commentaire : <?php echo $_smarty_tpl->tpl_vars['commentaire']->value;?>

            </p>
        </div>
    </div>
</body><?php }
}
