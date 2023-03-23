<?php
// Chargement de prérequis
require 'base.php';
// On démarre Smarty AVANT d'écrire du code HTML	
require '../vendor/autoload.php';
// Creer un objet Smarty
$smarty = new Smarty();
// Definir les chemins des templates
$smarty->setTemplateDir('../tpl/');
// Assigner des variables
$smarty->assign('titre_onglet', 'Liste des wishlists');
$smarty->assign('titre_page', 'Vos wishlists');
// Afficher les templates
$smarty->display('header.tpl');
$smarty->display('wishlist-liste.tpl');
$smarty->display('footer.tpl');