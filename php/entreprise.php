<?php
require 'base.php';
//Requête SQL
//AJOUTER LA RECUPERAION DES AVIS
$sql = 'SELECT information, presentation, ID_recruteur, entreprise.ID_entreprise, nom_entreprise, site_web, numero_tel, mail_contact, entreprise.ID_adresse, numero, complement, rue, nom_ville, code_postal, region, nom_pays FROM `entreprise` 
JOIN recruteur ON recruteur.ID_entreprise = entreprise.ID_entreprise 
JOIN adresse ON adresse.ID_adresse = entreprise.ID_adresse
JOIN ville ON adresse.ID_ville = ville.ID_ville
JOIN region ON region.ID_region = ville.ID_region
JOIN pays ON region.ID_pays = pays.ID_pays
WHERE ID_recruteur = ' . $_SESSION['ID_recruteur'];
$result = $conn->query($sql);

// Assigner des variables
foreach ($result as $row) {
    $ID_entreprise = $row['ID_entreprise'];
    $nom_entreprise = $row['nom_entreprise'];
    $site_web = $row['site_web'];
    $numero_tel = $row['numero_tel'];
    $mail_contact = $row['mail_contact'];
    $numero = $row['numero'];
    $complement = $row['complement'];
    $rue = $row['rue'];
    $ville = $row['nom_ville'];
    $code_postal = $row['code_postal'];
    $region = $row['region'];
    $pays = $row['nom_pays'];
    $presentation = $row['presentation'];
    $information = $row['information'];
}
$sql = "SELECT note, commentaire FROM avis JOIN entreprise ON entreprise.ID_entreprise = avis.ID_entreprise JOIN recruteur ON recruteur.ID_entreprise = entreprise.ID_entreprise WHERE recruteur.ID_recruteur = '{$_SESSION['ID_recruteur']}'";$result = $conn->query($sql);
foreach ($result as $row) {
    $note = $row['note'];
    $commentaire = $row['commentaire'];
}

$smarty->assign('nom_entreprise', $nom_entreprise);
$smarty->assign('site_web', $site_web);
$smarty->assign('numero_tel', $numero_tel);
$smarty->assign('mail_contact', $mail_contact);
$smarty->assign('numero', $numero);
$smarty->assign('complement', $complement);
$smarty->assign('rue', $rue);
$smarty->assign('ville', $ville);
$smarty->assign('code_postal', $code_postal);
$smarty->assign('region', $region);
$smarty->assign('pays', $pays);
$smarty->assign('note', $note);
$smarty->assign('commentaire', $commentaire);
$smarty->assign('presentation', $presentation);
$smarty->assign('information', $information);

$smarty->assign('titre_onglet', 'Entreprise');
$smarty->assign('titre_page', $nom_entreprise);
$smarty->assign('description', 'Page de l\'entreprise '.$nom_entreprise.' sur le site eXia.Mesh');

// Afficher les templates
$smarty->display('header.tpl');
$smarty->display('entreprise.tpl');
$smarty->display('footer.tpl');