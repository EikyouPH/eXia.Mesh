<?php
// Chargement de prérequis
require 'base.php';

// Assigner les variables Smarty au template
$smarty->assign('titre_onglet', 'Edition du profil');
$smarty->assign('titre_page', 'Edition du profil');

// Assigner des variables
$smarty->assign('titre_onglet', 'Recherche');
$smarty->assign('titre_page', 'Recherche');
$smarty->assign('description', 'Page de recherche de membres et annonces');

// Afficher les templates
$smarty->display('header.tpl');
$smarty->display('recherche.tpl');
$smarty->display('footer.tpl');
?>