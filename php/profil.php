<?php

require 'base.php';
$role = $_SESSION['role'];

$sql = "SELECT `ID_reseau`, `lien_facebook`, `lien_indeed`, `lien_linkedin`, `lien_perso` FROM `reseaux` WHERE ID_utilisateur = '$_SESSION[ID_utilisateur]'";
$result = $conn->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);
$ID_reseau = $row['ID_reseau'];
$lien_facebook = $row['lien_facebook'];
$lien_indeed = $row['lien_indeed'];
$lien_linkedin = $row['lien_linkedin'];
$lien_perso = $row['lien_perso'];

if ($role == 'pilote') {
    //On cherche la promo
    $sql = "SELECT nom_promo FROM promo WHERE ID_pilote = '$_SESSION[ID_pilote]'";
    $result = $conn->query($sql);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    $nom_promo = $row['nom_promo'];
    $smarty->assign('nom_promo', $nom_promo);
    //On cherche le centre
    $sql = "SELECT nom_centre FROM centre WHERE ID_centre = '$_SESSION[ID_centre]'";
    $result = $conn->query($sql);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    $nom_centre = $row['nom_centre'];
    $smarty->assign('nom_centre', $nom_centre);
    
}
if ($role == 'etudiant') {
    //On cherche la promo
    $sql = "SELECT nom_promo FROM promo WHERE ID_pilote = '$_SESSION[ID_etudiant]'";
    $result = $conn->query($sql);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    $nom_promo = $row['nom_promo'];
    $smarty->assign('nom_promo', $nom_promo);
    //On cherche le centre
    $sql = "SELECT nom_centre FROM centre WHERE ID_centre = '$_SESSION[ID_centre]'";
    $result = $conn->query($sql);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    $nom_centre = $row['nom_centre'];
    $smarty->assign('nom_centre', $nom_centre);
    //On cherche les infos d'étudiant
    $sql = "SELECT lettre_motivation FROM etudiant WHERE ID_etudiant = '$_SESSION[ID_etudiant]'";
    $result = $conn->query($sql);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    $lettre_motivation = $row['lettre_motivation'];
    $smarty->assign('lettre_motivation', $lettre_motivation);
    

}
if ($role == 'recruteur') {
    $sql = "SELECT nom_entreprise FROM entreprise WHERE ID_entreprise = '$_SESSION[ID_entreprise]'";
    $result = $conn->query($sql);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    $nom_entreprise = $row['nom_entreprise'];
    $smarty->assign('nom_entreprise', $nom_entreprise);
}


// Assigner les variables reseaux Smarty au template
$smarty->assign('lien_facebook', $lien_facebook);
$smarty->assign('lien_indeed', $lien_indeed);
$smarty->assign('lien_linkedin', $lien_linkedin);
$smarty->assign('lien_perso', $lien_perso);



// Requete SQL
$sql = "SELECT nom_utilisateur, prenom, mail, date_naissance, numero, complement, rue, nom_ville, code_postal, region, nom_pays FROM utilisateur JOIN adresse ON utilisateur.ID_adresse = adresse.ID_adresse JOIN ville ON adresse.ID_ville = ville.ID_ville JOIN region ON ville.ID_region = region.ID_region JOIN pays ON pays.ID_pays = region.ID_pays WHERE ID_utilisateur = '$_SESSION[ID_utilisateur]'";
$result = $conn->query($sql);

// Assigner des variables
foreach ($result as $row) {
    $nom_utilisateur = $row['nom_utilisateur'];
    $prenom = $row['prenom'];
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

if ($role == 'admin') {
    $smarty->display('profil-admin.tpl');
}
if ($role == 'pilote') {
    $smarty->display('profil-pilote.tpl');
}
if ($role == 'etudiant') {
    $smarty->display('profil-etudiant.tpl');
}
if ($role == 'recruteur') {
    $smarty->display('profil-recruteur.tpl');
}
$smarty->display('footer.tpl');