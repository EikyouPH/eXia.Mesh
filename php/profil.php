<?php

require 'base.php';

//recherches liens des réseaux
$sql = "SELECT lien_reseau, ID_reseau FROM reseaux WHERE ID_utilisateur = '$_SESSION[ID_utilisateur]' AND nom_reseau = 'Facebook'";
$result = $conn->query($sql);
foreach ($result as $row) {
    $lien_facebook = $row['lien_reseau'];
    $ID_reseau_facebook = $row['ID_reseau'];
}
$sql = "SELECT lien_reseau, ID_reseau FROM reseaux WHERE ID_utilisateur = '$_SESSION[ID_utilisateur]' AND nom_reseau = 'Linkedin'";
$result = $conn->query($sql);
foreach ($result as $row) {
    $lien_linkedin = $row['lien_reseau'];
    $ID_reseau_linkedin = $row['ID_reseau'];
}
$sql = "SELECT lien_reseau, ID_reseau FROM reseaux WHERE ID_utilisateur = '$_SESSION[ID_utilisateur]' AND nom_reseau = 'Indeed'";
$result = $conn->query($sql);
foreach ($result as $row) {
    $lien_indeed = $row['lien_reseau'];
    $ID_reseau_indeed = $row['ID_reseau'];
}
$sql = "SELECT lien_reseau, ID_reseau FROM reseaux WHERE ID_utilisateur = '$_SESSION[ID_utilisateur]' AND nom_reseau = 'Linkedin'";
$result = $conn->query($sql);
foreach ($result as $row) {
    $lien_perso = $row['lien_reseau'];
    $ID_reseau_perso = $row['ID_reseau'];
}

// Assigner les variables reseaux Smarty au template
$smarty->assign('lien_facebook', $lien_facebook);
$smarty->assign('lien_indeed', $lien_indeed);
$smarty->assign('lien_linkedin', $lien_linkedin);
$smarty->assign('lien_perso', $lien_perso);



// Requete SQL
$sql = "SELECT nom_utilisateur, prenom, password, mail, date_naissance, numero, complement, rue, nom_ville, code_postal, region, nom_pays FROM utilisateur JOIN adresse ON utilisateur.ID_adresse = adresse.ID_adresse JOIN ville ON adresse.ID_ville = ville.ID_ville JOIN region ON ville.ID_region = region.ID_region JOIN pays ON pays.ID_pays = region.ID_pays WHERE ID_utilisateur = '$_SESSION[ID_utilisateur]'";
$result = $conn->query($sql);

// Assigner des variables
foreach ($result as $row) {
    $nom_utilisateur = $row['nom_utilisateur'];
    $prenom = $row['prenom'];
    $password = $row['password'];
    $mail = $row['mail'];
    $date_naissance = $row['date_naissance'];
    $numero = $row['numero'];
    $complement = $row['complement'];
    $rue = $row['rue'];
    $ville = $row['nom_ville'];
    $code_postal = $row['code_postal'];
    $region = $row['region'];
    $pays = $row['nom_pays'];
}

$smarty->assign('nom_utilisateur', $nom_utilisateur);
$smarty->assign('prenom', $prenom);
$smarty->assign('password', $password);
$smarty->assign('mail', $mail);
$smarty->assign('date_naissance', $date_naissance);
$smarty->assign('numero', $numero);
$smarty->assign('complement', $complement);
$smarty->assign('rue', $rue);
$smarty->assign('ville', $ville);
$smarty->assign('code_postal', $code_postal);
$smarty->assign('region', $region);
$smarty->assign('pays', $pays);

$smarty->assign('titre_onglet', 'Profil');
$smarty->assign('titre_page', 'Profil');

// Afficher les templates
$smarty->display('header.tpl');
$smarty->display('profil.tpl');
$smarty->display('footer.tpl');