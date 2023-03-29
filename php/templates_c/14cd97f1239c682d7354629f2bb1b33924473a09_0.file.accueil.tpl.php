<?php
/* Smarty version 4.3.0, created on 2023-03-29 10:37:43
  from 'D:\Documents\Site Projet Web\eXia.Mesh\tpl\accueil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6423f8d70696b8_96868214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14cd97f1239c682d7354629f2bb1b33924473a09' => 
    array (
      0 => 'D:\\Documents\\Site Projet Web\\eXia.Mesh\\tpl\\accueil.tpl',
      1 => 1680079060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6423f8d70696b8_96868214 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="/css/accueil.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/css/notifications-accueil.css" type="text/css" media="screen" />
<body>
  <table class="page-accueil">
    <thead>
      <tr>
        <th left>
          <h2>Les dernières annonces</h2>
        </th>
        <th right colspan="2">
          <h2>Vos dernières notifications</h2>
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="cadre" rowspan="3">
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
            <tr>
              <td>
                <div id="description">
                  <h2>Description du poste</h2>
                  <p><?php echo $_smarty_tpl->tpl_vars['detail']->value;?>
</p>
                  <?php echo $_smarty_tpl->tpl_vars['nombre_places']->value;?>
 places restantes
                </div>
              </td>
            </tr>
            
      </tr>
  </table>


  <hr>
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
            <tr>
              <td>
                <div id="description">
                  <h2>Description du poste</h2>
                  <p><?php echo $_smarty_tpl->tpl_vars['detail']->value;?>
</p>
                  <?php echo $_smarty_tpl->tpl_vars['nombre_places']->value;?>
 places restantes
                </div>
              </td>
            </tr>
            
      </tr>
  </table>

  </td>
  <td colspan="2">
  <table id="notification">
  <tr>
      <td><a href="notifications.php" target="_blank" aria-label="Vos notifications">
              <div class="notification">
                  <div class="notification-header">
                      <div class="notification-title">Notification 1</div>
                      <div class="notification-date">Date</div>
                  </div>
                  <div class="notification-content">
                      <a href="notifications.php" target="_blank" aria-label="Vos notifications" >
                          <div class="notification-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
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
                          <div class="notification-link"><a href="#"  aria-label="Fleche vers la droite"><img src="/img/fleche-droite.svg"
                                      aria-label="Fleche vers la droite"></a></div>
                  </div>
              </div>
          </a>
          <hr>
          <div class="notification">
              <div class="notification-header">
                  <div class="notification-title">Notification 2</div>
                  <div class="notification-date">Date</div>
              </div>
              <div class="notification-content">
                  <div class="notification-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                      euismod,
                      nisl sit amet ultricies lacinia, nisl nisl aliquam nisl, eget aliquam nisl nisl sit amet
                      nisl.
                      Sed euismod, nisl sit amet ultricies lacinia, nisl nisl aliquam nisl, eget aliquam nisl nisl
                      sit
                      amet nisl.</div>
                  <div class="notification-link"><a href="#" aria-label="Fleche vers la droite"><a href="#"><img src="/img/fleche-droite.svg"
                                  aria-label="Fleche vers la droite"></a></a></div>
              </div>
          </div>
          <hr>
          <div class="notification">
              <div class="notification-header">
                  <div class="notification-title">Notification 3</div>
                  <div class="notification-date">Date</div>
              </div>
              <div class="notification-content">
                  <div class="notification-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                      euismod,
                      nisl sit amet ultricies lacinia, nisl nisl aliquam nisl, eget aliquam nisl nisl sit amet
                      nisl.
                      Sed euismod, nisl sit amet ultricies lacinia, nisl nisl aliquam nisl, eget aliquam nisl nisl
                      sit
                      amet nisl.</div>
                  <div class="notification-link"><a href="#" aria-label="Vos notifications" ><img src="/img/fleche-droite.svg"
                              aria-label="Fleche vers la droite"></a><a href="#" aria-label="Fleche vers la droite">
                  </div>
              </div>
          </div>
          <hr>
      </td>
  </tr>
</table>
  </td>
  </tr>
  <tr>
    <td class="cadre" colspan="2">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, molestiae? Et aut suscipit optio minus
      tempora fuga autem quisquam cupiditate, magnam aspernatur laudantium. Quas in repudiandae, quos nisi iusto
      unde.
      Animi in minima minus enim consectetur quis culpa soluta! Atque deleniti iure, excepturi numquam corrupti
      soluta velit eum iste saepe, nobis nostrum provident quae voluptatem possimus sapiente rerum, quasi modi?
      Earum consectetur impedit nesciunt quisquam perspiciatis, dicta reiciendis placeat distinctio, atque sapiente
      doloribus aperiam repellendus, nihil quasi eius ipsam labore velit maiores. Laboriosam doloribus eius
      obcaecati, magni illum nisi consequuntur.
    </td>
  </tr>
  <tr class="lien">
    <td>
      <a href="/php/wishlist-liste.php" aria-label="Wishlist">Voir wishlist</a>
    </td>
    <td>
      <a href="/php/recap-candidatures.php" aria-label="vos candidatures">Voir candidatures</a>
    </td>
  </tr>
  </tbody>
  </table>
</body><?php }
}
