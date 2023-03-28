<?php
// On démarre Smarty AVANT d'écrire du code HTML	
require '../vendor/autoload.php';

// Creer un objet Smarty
$smarty = new Smarty();

// Definir les chemins des templates
$smarty->setTemplateDir('../tpl/');

// Assigner des variables
$smarty->assign('titre_onglet', 'Mentions légales');
$smarty->assign('titre_page', 'Mentions légales');
$smarty->assign('description', 'Page d\'accueil du site eXia.Mesh');

// Afficher les templates
$smarty->display('header.tpl');
$smarty->display('mentions-legales.tpl');
$smarty->display('footer.tpl');
?>