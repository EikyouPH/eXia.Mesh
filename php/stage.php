<?php
require 'base.php';

$idstage = 1;

//Requête SQL
$sql = "SELECT durée, remuneration, date_publication, date_debut, date_fin, nombres_places, detail, numero, complement, rue, nom_ville, code_postal, region, nom_pays, s.nom_secteur AS s1, s2.nom_secteur AS s2 FROM stage JOIN entreprise ON stage.ID_entreprise = entreprise.ID_entreprise JOIN adresse ON entreprise.ID_adresse = adresse.ID_adresse JOIN ville ON adresse.ID_ville = ville.ID_ville JOIN region ON ville.ID_region = region.ID_region JOIN pays ON pays.ID_pays = region.ID_pays JOIN secteur_activite s ON stage.ID_activite = s.ID_activite JOIN secteur_activite s2 ON stage.ID_activite2 = s2.ID_activite WHERE ID_stage = $idstage";
$result = $conn->query($sql);

// Assigner des variables
foreach ($result as $row) {
    $duree = $row['durée'];
    $remuneration = $row['remuneration'];
    $date_publication = $row['date_publication'];
    $date_debut = $row['date_debut'];
    $date_fin = $row['date_fin'];
    $nombres_places = $row['nombres_places'];
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
}

$smarty->assign('titre_onglet', 'Stage');
$smarty->assign('titre_page', 'Stage');

// Afficher les templates
$smarty->display('header.tpl');
$smarty->display('stage.tpl');
$smarty->display('footer.tpl');
?>