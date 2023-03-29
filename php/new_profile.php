<?php
require 'base.php';
//------------------------------------------------------INFOS UTILISATEUR SELECTIONNE----------------------------------------------------------------------------------------------
$role = $_GET['role'];
if ($role == 'admin') {
    $smarty->assign('titre_onglet', 'Création du profil');
    $smarty->assign('titre_page', 'Création du profil Administrateur');
}
if ($role == 'pilote') {
    $smarty->assign('titre_onglet', 'Création du profil');
    $smarty->assign('titre_page', 'Création du profil Pilote');
}
if ($role == 'recruteur') {
    $smarty->assign('titre_onglet', 'Création du profil');
    $smarty->assign('titre_page', 'Création du profil Recruteur');
}
if ($role == 'etudiant') {
    $smarty->assign('titre_onglet', 'Création du profil');
    $smarty->assign('titre_page', 'Création du profil Etudiant');
}


if (isset($_POST['submit'])) {

    //------------------------------------------------------INFO TABLE UTILISATEURS-------------------------------------------------------------------
    $nom_utilisateur = $_POST['nom_utilisateur'];
    $password = $_POST['password'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $date_naissance = $_POST['date_naissance'];

    $sql = "INSERT INTO utilisateur SET nom_utilisateur=?, password=?, prenom=?,mail=?, date_naissance=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$nom_utilisateur, $password, $prenom, $mail, $date_naissance,]);

    $sql = "SELECT ID_utilisateur FROM utilisateur WHERE nom_utilisateur = '$nom_utilisateur'AND prenom = '$prenom'AND date_naissance = '$date_naissance'";
    $result = $conn->query($sql);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    $ID_utilisateur_new = $row['ID_utilisateur'];



    //---------------------------------------------------INFO TABLE PAYS ------------------------------------------------------------------------------
    $pays = $_POST['nom_pays'];

    $sql = "SELECT ID_pays FROM `pays` WHERE nom_pays = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$pays]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC); // Récupérer la ligne de résultat de la requête

    if ($row) {
        // Le pays existe déjà dans la base de données, effectuer une mise à jour
        $ID_pays = $row['ID_pays'];
    } else {
        // Le pays n'existe pas encore dans la base de données, effectuer une insertion
        $sql = "INSERT INTO pays (nom_pays) VALUES (?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$pays]);
        //Le pays vient s'être créé
        $sql = "SELECT ID_pays FROM pays WHERE nom_pays = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$pays]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $ID_pays = $row['ID_pays'];
    }
    //-------------------------------------------------INFO TABLE REGIONS---------------------------------------------------------------------
    $region = $_POST['region'];

    $sql = "SELECT ID_region FROM `region` WHERE region = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$region]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC); // Récupérer la ligne de résultat de la requête

    if ($row) {
        // La région existe déjà dans la base de données, effectuer une mise à jour
        $ID_region = $row['ID_region'];
    } else {
        // La region n'existe pas encore dans la base de données, effectuer une insertion
        $sql = "INSERT INTO region (region) VALUES (?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$region]);
        //La région vient s'être créé
        $sql = "SELECT ID_region FROM region WHERE region = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$region]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $ID_region = $row['ID_region'];
    }
    //-------------------------------------------INFO TABLE VILLE -----------------------------------------------------------------------

    $ville = $_POST['ville'];
    $code_postal = $_POST['code_postal'];

    $sql = "SELECT * FROM `ville` WHERE nom_ville = ? AND code_postal = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$ville, $code_postal]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC); // Récupérer la ligne de résultat de la requête

    if ($row) {
        // La ville existe déjà dans la base de données, effectuer une mise à jour
        $ID_ville = $row['ID_ville'];
    } else {
        // La vile n'existe pas encore dans la base de données, effectuer une insertion
        $sql = "INSERT INTO ville (nom_ville, code_postal) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$ville, $code_postal]);
        //La ville vient d'être créé
        $sql = "SELECT ID_ville FROM ville WHERE nom_ville = ? AND code_postal = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$ville, $code_postal]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $ID_ville = $row['ID_ville'];
    }

    //------------------------------------------------------INFO TABLE ADRESSE-------------------------------------------------------------------
    $numero = $_POST['numero'];
    $complement = $_POST['complement'];
    $rue = $_POST['rue'];

    // Vérifier si l'adresse existe déjà dans la base de données
    $sql = "SELECT ID_adresse FROM adresse WHERE numero = ? AND complement = ? AND rue = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$numero, $complement, $rue]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC); // Récupérer la ligne de résultat de la requête

    if ($row) {
        // L'adresse existe déjà dans la base de données, effectuer une mise à jour
        $id_adresse = $row['ID_adresse'];
    } else {
        // L'adresse n'existe pas encore dans la base de données, effectuer une insertion
        $sql = "INSERT INTO adresse (numero, complement, rue) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$numero, $complement, $rue]);

        $sql = "SELECT ID_adresse FROM adresse WHERE numero = ? AND complement = ? AND rue = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$numero, $complement, $rue]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $id_adresse = $row['ID_adresse'];
    }

    //-----------------------------------------------INSERT ADRESSE----------------------------------------------------------------------------------

    $sql = "UPDATE region SET ID_pays = ? Where ID_region =?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$ID_pays, $ID_region]);

    $sql = "UPDATE ville SET ID_region = ? Where ID_ville =?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$ID_region, $ID_ville]);

    $sql = "UPDATE adresse SET ID_ville = ? Where ID_adresse =?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$ID_ville, $id_adresse]);

    $sql = "UPDATE utilisateur SET ID_adresse = ? Where ID_utilisateur =?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id_adresse, $ID_utilisateur_new]);


    //---------------------------------------------INSERT RESEAUX -----------------------------------------------------------
    $lien_linkedin = $_POST['lien_linkedin'];
    $lien_facebook = $_POST['lien_facebook'];
    $lien_indeed = $_POST['lien_indeed'];
    $lien_perso = $_POST['lien_perso'];

    $sql = "INSERT INTO `reseaux`(`lien_facebook`, `lien_indeed`, `lien_linkedin`, `lien_perso`, `ID_utilisateur`) VALUES (?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$lien_facebook, $lien_indeed, $lien_linkedin, $lien_perso, $ID_utilisateur_new]);

    //---------------------------------------------INSERT PAR RAPPORT AU ROLE -----------------------------------------------------------

    if ($role == 'admin') {
        $sql = "INSERT INTO `admin` (`ID_utilisateur`) VALUES (?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$ID_utilisateur_new]);
    }
    if ($role == 'pilote') {

        $nom_centre = $_POST['nom_centre'];
        $sql = "SELECT ID_centre FROM `centre` WHERE `nom_centre` = '$nom_centre'";
        $result = $conn->query($sql);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $Id_centre = $row['ID_centre'];

        $sql = "INSERT INTO `pilote` (`ID_utilisateur`, `ID_centre`) VALUES (?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$ID_utilisateur_new, $Id_centre]);

    }
    if ($role == 'recruteur') {
        $sql = "INSERT INTO `recruteur` (`ID_utilisateur`) VALUES (?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$ID_utilisateur_new]);

    }
    if ($role == 'etudiant') {
        $nom_centre = $_POST['nom_centre'];
        $sql = "SELECT ID_centre FROM `centre` WHERE `nom_centre` = '$nom_centre'";
        $result = $conn->query($sql);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $Id_centre = $row['ID_centre'];

        // Vérifier si la promo existe déjà dans la base de données
        $nom_promo = $_POST['nom_promo'];
        $sql = "SELECT ID_promo FROM promo WHERE nom_promo = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$nom_promo]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC); // Récupérer la ligne de résultat de la requête

        if ($row) {
            // La promo existe déjà dans la base de données, effectuer une mise à jour
            $ID_promo = $row['ID_promo'];
        } else {
            // La promo n'existe pas encore dans la base de données, effectuer une insertion
            $sql = "INSERT INTO promo (nom-promo) VALUES (?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$nom_promo]);

            $sql = "SELECT ID_promo FROM promo WHERE nom_promo = $nom_promo";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $ID_promo = $row['ID_promo'];
        }

        $sql = "INSERT INTO `etudiant` (`ID_utilisateur`, `ID_centre`, Id_promo) VALUES (?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$ID_utilisateur_new, $Id_centre, $ID_promo]);
    }


    header("Location: profil.php");
    exit();
}

// Afficher les templates
$smarty->display('header.tpl'); //affiche le Header


if ($role == 'admin') {
    $smarty->display('new-profil-admin.tpl');
} else if ($role == 'pilote') {
    $smarty->display('new-profil-pilote.tpl');
} else if ($role == 'etudiant') {
    $smarty->display('new-profil-etudiant.tpl');
} else if ($role == 'recruteur') {
    $smarty->display('new-profil-recruteur.tpl');
} else {
    $smarty->display('edit-profil.tpl');
}

$smarty->display('footer.tpl');