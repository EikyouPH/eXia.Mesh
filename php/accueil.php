<?php
// Chargement de prérequis
require 'base.php';

//--------------------------------------------------------------ROLE--------------------------------------------------------------------------------------------------------------

//On cherche QUI est QUOI 
//Admin ?
$sql = "SELECT ID_admin FROM `admin` WHERE ID_utilisateur = '$_SESSION[ID_utilisateur]'";
$result = $conn->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);
if ($row) {
    $_SESSION['role'] = 'admin';
    $_SESSION['ID_admin'] = $row['ID_admin'];
}

//Etudiant ?
$sql = "SELECT ID_etudiant FROM `etudiant` WHERE ID_utilisateur = '$_SESSION[ID_utilisateur]'";
$result = $conn->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);
if ($row) {
    $_SESSION['role'] = 'etudiant';
    $_SESSION['ID_etudiant'] = $row['ID_etudiant'];
}

//Pilote ?
$sql = "SELECT ID_pilote,ID_centre FROM `pilote` WHERE ID_utilisateur = '$_SESSION[ID_utilisateur]'";
$result = $conn->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);
if ($row) {
    $_SESSION['role'] = 'pilote';
    $_SESSION['ID_pilote'] = $row['ID_pilote'];
    $_SESSION['ID_centre'] = $row['ID_centre'];
}

//Recruteur ?
$sql = "SELECT ID_recruteur FROM `recruteur` WHERE ID_utilisateur = '$_SESSION[ID_utilisateur]'";
$result = $conn->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);
if ($row) {
    $_SESSION['role'] = 'recruteur';
    $_SESSION['recruteur'] = $row['ID_recruteur'];
}


// Assigner des variables
$smarty->assign('titre_onglet', 'Accueil');
$smarty->assign('titre_page', 'Accueil');

// Afficher les templates
$smarty->display('header.tpl');
$smarty->display('accueil.tpl');
$smarty->display('footer.tpl');