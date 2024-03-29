<?php

require 'base.php';
$role = $_SESSION['role'];

$sql = "SELECT `ID_reseau`, `lien_facebook`, `lien_indeed`, `lien_linkedin`, `lien_perso` FROM `reseaux` WHERE ID_utilisateur = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$_SESSION['ID_utilisateur']]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
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
$smarty->assign('description', 'Page de votre profil');


// Afficher les templates
$smarty->display('header.tpl');

if ($role == 'admin') {
    $smarty->display('profil-admin.tpl');
    //-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    echo "Administrateur<br>";
    echo "<div class='row'>";
    $sql = "SELECT utilisateur.ID_utilisateur, ID_admin,date_naissance,nom_utilisateur,prenom,mail FROM admin JOIN utilisateur ON admin.ID_utilisateur = utilisateur.ID_utilisateur";
    $result = $conn->query($sql);
    // Assigner les données SQL aux variables Smarty
    foreach ($result as $row) {
        $ID_admin = $row['ID_admin'];
        $ID_utilisateur_mod = $row['ID_utilisateur'];
        $nom_utilisateur = $row['nom_utilisateur'];
        $prenom = $row['prenom'];
        $mail = $row['mail'];
        $date_naissance = $row['date_naissance'];
        if ($ID_utilisateur_mod != $_SESSION['ID_utilisateur']) {
            echo "<div class='column'>";
            echo "Prénom : $prenom<br>";
            echo "Nom : $nom_utilisateur<br>";
            echo "Mail : $mail<br>";
            echo "Date de naissance : $date_naissance<br>";
            echo "<a class='d' href='admin-edit.php?ID=$ID_utilisateur_mod&ID_role=$ID_admin&role=admin'>Modifier</a>";
            echo "</div>";
        }
    }
    echo "<div class='column' style='text-align: center; font-size: 5rem'>";
    echo "<a href='new_profile.php?role=admin' style='text-decoration: none; color: #669ea0'>+</a>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    //-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    echo "Pilote<br>";
    echo "<div class='row'>";
    $sql = "SELECT utilisateur.ID_utilisateur,ID_pilote,date_naissance,nom_utilisateur,prenom,mail FROM pilote JOIN utilisateur ON pilote.ID_utilisateur = utilisateur.ID_utilisateur";
    $result = $conn->query($sql);
    // Assigner les données SQL aux variables Smarty

    foreach ($result as $row) {
        $ID_pilote = $row['ID_pilote'];
        $ID_utilisateur_mod = $row['ID_utilisateur'];
        $nom_utilisateur = $row['nom_utilisateur'];
        $prenom = $row['prenom'];
        $mail = $row['mail'];
        $date_naissance = $row['date_naissance'];
        if ($ID_utilisateur_mod != $_SESSION['ID_utilisateur']) {
            echo "<div class='column'>";
            echo "Prénom : $prenom<br>";
            echo "Nom : $nom_utilisateur<br>";
            echo "Mail : $mail<br>";
            echo "Date de naissance : $date_naissance<br>";
            echo "<a class='d' href='admin-edit.php?ID=$ID_utilisateur_mod&ID_role=$ID_pilote&role=pilote'>Modifier</a>";
            echo "</div>";
        }
    }
    echo "<div class='column' style='text-align: center; font-size: 5rem'>";
    echo "<a href='new_profile.php?role=pilote' style='text-decoration: none; color: #669ea0'>+</a>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    //-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    echo "Recruteur<br>";
    echo "<div class='row'>";
    $sql = "SELECT ID_recruteur, nom_entreprise, utilisateur.ID_utilisateur,date_naissance,nom_utilisateur,prenom,mail FROM recruteur JOIN utilisateur ON recruteur.ID_utilisateur = utilisateur.ID_utilisateur JOIN entreprise ON recruteur.ID_entreprise = entreprise.ID_entreprise";
    $result = $conn->query($sql);
    // Assigner les données SQL aux variables Smarty

    foreach ($result as $row) {
        $ID_recruteur = $row['ID_recruteur'];
        $ID_utilisateur_mod = $row['ID_utilisateur'];
        $nom_utilisateur = $row['nom_utilisateur'];
        $nom_entreprise = $row['nom_entreprise'];
        $prenom = $row['prenom'];
        $mail = $row['mail'];
        $date_naissance = $row['date_naissance'];
        if ($ID_utilisateur_mod != $_SESSION['ID_utilisateur']) {
            echo "<div class='column'>";
            echo "Prénom : $prenom<br>";
            echo "Nom : $nom_utilisateur<br>";
            echo "Entreprise : $nom_entreprise<br>";
            echo "Mail : $mail<br>";
            echo "Date de naissance : $date_naissance<br>";
            echo "<a class='d' href='admin-edit.php?ID=$ID_utilisateur_mod&ID_role=$ID_recruteur&role=recruteur'>Modifier</a>";
            echo "</div>";
        }
    }
    echo "<div class='column' style='text-align: center; font-size: 5rem'>";
    echo "<a href='new_profile.php?role=recruteur' style='text-decoration: none; color: #669ea0'>+</a>";
    echo "</div>";
    echo "</div>";
    echo "</div>";

    //-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    echo "Etudiants<br>";
    echo "<div class='row'>";
    $sql = "SELECT etudiant.ID_etudiant, utilisateur.ID_utilisateur,date_naissance,nom_utilisateur,prenom,mail FROM etudiant JOIN utilisateur ON etudiant.ID_utilisateur = utilisateur.ID_utilisateur";
    $result = $conn->query($sql);
    // Assigner les données SQL aux variables Smarty

    foreach ($result as $row) {
        $ID_etudiant = $row['ID_etudiant'];
        $ID_utilisateur_mod = $row['ID_utilisateur'];
        $nom_utilisateur = $row['nom_utilisateur'];
        $prenom = $row['prenom'];
        $mail = $row['mail'];
        $date_naissance = $row['date_naissance'];
        if ($ID_utilisateur_mod != $_SESSION['ID_utilisateur']) {
            echo "<div class='column'>";
            echo "Prénom : $prenom<br>";
            echo "Nom : $nom_utilisateur<br>";
            echo "Mail : $mail<br>";
            echo "Date de naissance : $date_naissance<br>";
            echo "<a class='d' href='admin-edit.php?ID=$ID_utilisateur_mod&ID_role=$ID_recruteur&role=etudiant'>Modifier</a>";
            echo "</div>";
        }
    }
    echo "<div class='column' style='text-align: center; font-size: 5rem'>";
    echo "<a href='new_profile.php?role=etudiant' style='text-decoration: none; color: #669ea0'>+</a>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
}
if ($role == 'pilote') {
    $smarty->display('profil-pilote.tpl');
    echo "<div class='row'>";
    $sql = "SELECT utilisateur.ID_utilisateur,date_naissance, ID_etudiant, nom_utilisateur, prenom, mail FROM etudiant JOIN utilisateur ON etudiant.ID_utilisateur = utilisateur.ID_utilisateur";
    $result = $conn->query($sql);
    // Assigner les données SQL aux variables Smarty
    foreach ($result as $row) {
        $ID_utilisateur_etudiant = $row['ID_utilisateur'];
        $ID_etudiant = $row['ID_etudiant'];
        $nom_utilisateur = $row['nom_utilisateur'];
        $prenom = $row['prenom'];
        $mail = $row['mail'];
        $date_naissance = $row['date_naissance'];
        echo "<div class='column'>";
        echo "Prénom : $prenom<br>";
        echo "Nom : $nom_utilisateur<br>";
        echo "Mail : $mail<br>";
        echo "Date de naissance : $date_naissance<br>";
        echo "<a class='d' href='pilote-edit.php?ID=$ID_utilisateur_etudiant&ID_etudiant=$ID_etudiant'>Modifier</a>";
        echo "</div>";
    }
    echo "<div class='column' style='text-align: center; font-size: 5rem'>";
    echo "<a href='new_profile.php?role=etudiant' style='text-decoration: none; color: #669ea0'>+</a>";
    echo "</div>";
    echo "</div>";
}
echo "</div>";
if ($role == 'etudiant') {
    $smarty->display('profil-etudiant.tpl');
}
if ($role == 'recruteur') {
    $smarty->display('profil-recruteur.tpl');
}

$smarty->display('footer.tpl');