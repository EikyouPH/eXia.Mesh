<?php
// Chargement de prérequis
require 'base.php';

// Assigner des variables
$idstage = 1;

//Requête SQL
$sql = "SELECT nom_stage,durée, remuneration, date_publication, date_debut, date_fin, nombre_places, detail, numero, complement, rue, nom_ville, code_postal, region, nom_pays, s.nom_secteur AS s1, s2.nom_secteur AS s2, nom_entreprise FROM stage JOIN entreprise ON stage.ID_entreprise = entreprise.ID_entreprise JOIN adresse ON entreprise.ID_adresse = adresse.ID_adresse JOIN ville ON adresse.ID_ville = ville.ID_ville JOIN region ON ville.ID_region = region.ID_region JOIN pays ON pays.ID_pays = region.ID_pays JOIN secteur_activite s ON stage.ID_activite = s.ID_activite JOIN secteur_activite s2 ON stage.ID_activite2 = s2.ID_activite WHERE ID_stage = $idstage";
$result = $conn->query($sql);

// Assigner des variables
foreach ($result as $row) {
    $nom_stage = $row['nom_stage'];
    $duree = $row['durée'];
    $remuneration = $row['remuneration'];
    $date_publication = $row['date_publication'];
    $date_debut = $row['date_debut'];
    $date_fin = $row['date_fin'];
    $nombre_places = $row['nombre_places'];
    $detail = $row['detail'];
    $numero = $row['numero'];
    $complement = $row['complement'];
    $rue = $row['rue'];
    $ville = $row['nom_ville'];
    $code_postal = $row['code_postal'];
    $region = $row['region'];
    $pays = $row['nom_pays'];
    $domaine1 = $row['s1'];
    $domaine2 = $row['s2'];
    $entreprise = $row['nom_entreprise'];
}

$smarty->assign('nom_stage', $nom_stage);
$smarty->assign('duree', $duree);
$smarty->assign('remuneration', $remuneration);
$smarty->assign('date_publication', $date_publication);
$smarty->assign('date_debut', $date_debut);
$smarty->assign('date_fin', $date_fin);
$smarty->assign('nombre_places', $nombre_places);
$smarty->assign('detail', $detail);
$smarty->assign('numero', $numero);
$smarty->assign('complement', $complement);
$smarty->assign('rue', $rue);
$smarty->assign('ville', $ville);
$smarty->assign('code_postal', $code_postal);
$smarty->assign('region', $region);
$smarty->assign('pays', $pays);
$smarty->assign('domaine1', $domaine1);
$smarty->assign('domaine2', $domaine2);
$smarty->assign('entreprise', $entreprise);
$smarty->assign('titre_onglet', 'Votre');
$smarty->assign('titre_page', 'Stage');
$smarty->assign('titre_onglet', 'Votre candidature');
$smarty->assign('titre_page', 'Votre candidature');

$sql = "SELECT nom_utilisateur, prenom, password, mail, date_naissance, numero, complement, rue, nom_ville, code_postal, region, nom_pays FROM utilisateur JOIN adresse ON utilisateur.ID_adresse = adresse.ID_adresse JOIN ville ON adresse.ID_ville = ville.ID_ville JOIN region ON ville.ID_region = region.ID_region JOIN pays ON pays.ID_pays = region.ID_pays WHERE ID_utilisateur = '$_SESSION[ID_utilisateur]'";
$result2 = $conn->query($sql);

// Assigner des variables
foreach ($result2 as $row) {
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

// Afficher les templates
$smarty->display('header.tpl');
$smarty->display('candidature.tpl');
$smarty->display('footer.tpl');