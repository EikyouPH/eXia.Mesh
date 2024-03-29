<?php
require 'base.php';
// Requete SQL
$sql = "SELECT ID_utilisateur,nom_utilisateur, prenom, password, mail, date_naissance, numero, complement, rue, nom_ville, code_postal, region, nom_pays FROM utilisateur JOIN adresse ON utilisateur.ID_adresse = adresse.ID_adresse JOIN ville ON adresse.ID_ville = ville.ID_ville JOIN region ON ville.ID_region = region.ID_region JOIN pays ON pays.ID_pays = region.ID_pays WHERE ID_utilisateur = '$_SESSION[ID_utilisateur]'";
$result = $conn->query($sql);

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

if (isset($_POST['submit'])) {
    $id_utilisateur = $_SESSION['ID_utilisateur'];

    //---------------------------------------------------INFO TABLE PAYS ------------------------------------------------------------------------------
    $pays = $_POST['nom_pays'];

    $sql ="SELECT ID_pays FROM `pays` WHERE nom_pays = ?";
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

    $sql ="SELECT ID_region FROM `region` WHERE region = ?";
    $stmt= $conn->prepare($sql);
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
    
    $sql ="SELECT * FROM `ville` WHERE nom_ville = ? AND code_postal = ?";
    $stmt= $conn->prepare($sql);
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

//-----------------------------------------------UPDATE ADRESSE----------------------------------------------------------------------------------

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
$stmt->execute([$id_adresse, $id_utilisateur]);





//------------------------------------------------------INFO TABLE UTILISATEURS-------------------------------------------------------------------
$nom_utilisateur = $_POST['nom_utilisateur'];
$password = $_POST['password'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$date_naissance = $_POST['date_naissance'];

$sql = "UPDATE utilisateur SET nom_utilisateur=?, password=?, prenom=?,mail=?, date_naissance=? WHERE ID_utilisateur = ?";
$stmt= $conn->prepare($sql);
$stmt->execute([$nom_utilisateur, $password, $prenom, $mail, $date_naissance, $id_utilisateur]);

    
    header("Location: profil.php");
exit();
    }

// Afficher les templates
$smarty->display('header.tpl');
$smarty->display('edit-profil.tpl');
$smarty->display('footer.tpl');




