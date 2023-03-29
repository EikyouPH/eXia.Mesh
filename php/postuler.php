<?php
// Chargement de prérequis
require 'base.php';

//Requête SQL
$sql = "SELECT nom_utilisateur, prenom, mail, date_naissance, lettre_motivation FROM utilisateur JOIN etudiant ON etudiant.ID_utilisateur = utilisateur.ID_utilisateur WHERE utilisateur.ID_utilisateur = '$_SESSION[ID_utilisateur]'";
$result = $conn->query($sql);

// Assigner les données SQL aux variables Smarty
foreach ($result as $row) {
    $nom_utilisateur = $row['nom_utilisateur'];
    $prenom = $row['prenom'];
    $mail = $row['mail'];
    $date_naissance = $row['date_naissance'];
    $lettre_motivation = $row['lettre_motivation'];
}

if (isset($_POST['submit'])) {
    $id_utilisateur = $_SESSION['ID_utilisateur'];

    //------------------------------------------------------INFO TABLE UTILISATEURS-------------------------------------------------------------------
    $nom_utilisateur = $_POST['nom_utilisateur'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $date_naissance = $_POST['date_naissance'];
    $lettre_motivation = $_POST['lettre-motivation'];

    $sql = "SELECT CV FROM etudiant WHERE ID_etudiant= '$_SESSION[ID_etudiant]'";
    $result = $conn->query($sql);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    $CV = $row['CV'];

    $sql = "INSERT INTO `candidatures`(`ID_candidature`, `ID_etudiant`, `lettre_motivation`, `CV`) VALUES (ID_etudiant=?, lettre_motivation=?, CV)  WHERE ID_etudiant = $_SESSION[ID_etudiant]";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$_SESSION['ID_etudiant'], $lettre_motivation, $CV]);

    header("Location:/php/confirmation.php");
    exit();
}

// Assigner les variables Smarty au template
$smarty->assign('nom_utilisateur', $nom_utilisateur);
$smarty->assign('prenom', $prenom);
$smarty->assign('mail', $mail);
$smarty->assign('date_naissance', $date_naissance);
$smarty->assign('lettre_motivation', $lettre_motivation);
$smarty->assign('titre_onglet', 'Edition du profil');
$smarty->assign('titre_page', 'Edition du profil');



// Assigner des variables
$smarty->assign('titre_onglet', 'Postuler');
$smarty->assign('titre_page', 'Postuler');
$smarty->assign('description', 'Page de candidature');

// Afficher les templates
$smarty->display('header.tpl');
$smarty->display('postuler.tpl');
$smarty->display('footer.tpl');
