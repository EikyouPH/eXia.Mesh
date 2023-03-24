<?php
// Chargement de prérequis
require 'base.php';

// Assigner des variables
$smarty->assign('titre_onglet', 'Accueil');
$smarty->assign('titre_page', 'Accueil');

// Afficher les templates
$smarty->display('header.tpl');
$smarty->display('accueil.tpl');
$smarty->display('footer.tpl');