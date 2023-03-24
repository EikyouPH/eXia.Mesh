<?php
/* Smarty version 4.3.0, created on 2023-03-24 14:02:00
  from 'C:\Users\LudoK\OneDrive\CESI\A2\Web\projet\Projet-Web\tpl\notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641d9f48e2e177_33410184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ace79beb43cf6b493e2374772e8402a2215e108' => 
    array (
      0 => 'C:\\Users\\LudoK\\OneDrive\\CESI\\A2\\Web\\projet\\Projet-Web\\tpl\\notifications.tpl',
      1 => 1679499735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641d9f48e2e177_33410184 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="/css/style-notifications.css">

<body>

    <h2> Dernières notifications </h2>
    <table id="notification">
        <tr>
            <td><a href="notifications.php" target="_blank">
                    <div class="notification">
                        <div class="notification-header">
                            <div class="notification-title">Notification 1</div>
                            <div class="notification-date">Date</div>
                        </div>
                        <div class="notification-content">
                            <a href="notifications.php" target="_blank">
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
                                <div class="notification-link"><a href="#"><img src="/img/fleche-droite.svg"
                                            alt="Fleche vers la droite"></a></div>
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
                        <div class="notification-link"><a href="#"><a href="#"><img src="/img/fleche-droite.svg"
                                        alt="Fleche vers la droite"></a></a></div>
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
                        <div class="notification-link"><a href="#"><img src="/img/fleche-droite.svg"
                                    alt="Fleche vers la droite"></a><a href="#">
                        </div>
                    </div>
                </div>
                <hr>
            </td>
        </tr>
    </table>

</body><?php }
}
