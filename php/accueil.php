<?php
require '/php/base.php';
// On démarre Smarty AVANT d'écrire du code HTML	
require '../vendor/autoload.php';
// Creer un objet Smarty
$smarty = new Smarty();
// Definir les chemins des templates
$smarty->setTemplateDir('../tpl/');
// Assigner des variables
$smarty->assign('titre_onglet', 'Accueil');
$smarty->assign('titre_page', 'Accueil');
// Afficher les templates
$smarty->display('header.tpl');
$smarty->display('accueil.tpl');
$smarty->display('footer.tpl');