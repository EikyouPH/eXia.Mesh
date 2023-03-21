<?php
require 'base.php';
$IDentreprise=1;
//Requête SQL
$sql = "SELECT nom_entreprise, site_web, numero_tel, mail_contact, numero, complement, rue, nom_ville, code_postal, region, nom_pays FROM entreprise JOIN adresse ON entreprise.ID_adresse = adresse.ID_adresse JOIN ville ON adresse.ID_ville = ville.ID_ville JOIN region ON ville.ID_region = region.ID_region JOIN pays ON pays.ID_pays = region.ID_pays WHERE ID_entreprise = $IDentreprise";
$result = $conn->query($sql);

// Assigner des variables
foreach ($result as $row) {
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

$smarty->assign('titre_onglet', 'Entreprise');
$smarty->assign('titre_page', $nom_entreprise);

// Afficher les templates
$smarty->display('header.tpl');
$smarty->display('entreprise.tpl');
$smarty->display('footer.tpl');