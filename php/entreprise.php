<?php
require 'base.php';

// Assigner des variables
$smarty->assign('titre_onglet', 'Entreprise');
$smarty->assign('titre_page', 'Entreprise');

// Afficher les templates
$smarty->display('header.tpl');
$smarty->display('entreprise.tpl');
$smarty->display('footer.tpl');