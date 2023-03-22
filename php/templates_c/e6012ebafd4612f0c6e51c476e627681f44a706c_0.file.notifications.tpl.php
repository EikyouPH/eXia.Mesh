<?php
/* Smarty version 4.3.0, created on 2023-03-22 16:25:47
  from 'D:\Documents\Site Projet Web\Projet-Web\tpl\notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641b1dfb9a7a73_79169847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6012ebafd4612f0c6e51c476e627681f44a706c' => 
    array (
      0 => 'D:\\Documents\\Site Projet Web\\Projet-Web\\tpl\\notifications.tpl',
      1 => 1679498742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641b1dfb9a7a73_79169847 (Smarty_Internal_Template $_smarty_tpl) {
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
