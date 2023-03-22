<?php

require 'base.php';
// Requete SQL
$sql = "SELECT ID_utilisateur,nom_utilisateur, prenom, password, mail, date_naissance, numero, complement, rue, nom_ville, code_postal, region, nom_pays FROM utilisateur JOIN adresse ON utilisateur.ID_adresse = adresse.ID_adresse JOIN ville ON adresse.ID_ville = ville.ID_ville JOIN region ON ville.ID_region = region.ID_region JOIN pays ON pays.ID_pays = region.ID_pays WHERE ID_utilisateur = '$_SESSION[ID_utilisateur]'";
$result = $conn->query($sql);
// Assigner des variables

// Assigner les données SQL aux variables Smarty
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
if (isset($_POST['submit'])) {
    $nom_utilisateur = $_POST['nom_utilisateur'];
    $password = $_POST['password'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $date_naissance = $_POST['date_naissance'];
    $numero = $_POST['numero'];
    $complement = $_POST['complement'];
    $rue = $_POST['rue'];
    $nom_ville = $_POST['ville'];
    $code_postal = $_POST['code_postal'];
    $region = $_POST['region'];
    $nom_pays = $_POST['nom_pays'];
    $id_utilisateur = $_SESSION['ID_utilisateur'];
    
    $sql = "UPDATE utilisateur SET nom_utilisateur=?, password=?, prenom=?,mail=?, date_naissance=? WHERE ID_utilisateur = ?";
    $stmt= $conn->prepare($sql);
    $stmt->execute([$nom_utilisateur, $password, $prenom, $mail, $date_naissance, $id_utilisateur]);
    header("Location: profil.php");
exit();
    }
// Assigner les variables Smarty au template
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
$smarty->assign('titre_onglet', 'Edition du profil');
$smarty->assign('titre_page', 'Edition du profil');
// Afficher les templates
$smarty->display('header.tpl');
$smarty->display('edit-profil.tpl');
$smarty->display('footer.tpl');




