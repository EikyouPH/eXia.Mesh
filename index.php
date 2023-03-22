<?php
// session_start();

if (isset($_POST['submit'])) {
    $mail = $_POST['mail'];
    $password = $_POST['password'];


    // Connexion à la base de données
    $host = 'main.leskientz.ovh';
    $bdd = 'projet_web';
    $user = 'api';
    $mdp = 'Ludovic03';
    $attribute = PDO::ATTR_ERRMODE;
    $value = PDO::ERRMODE_EXCEPTION;

    // Vérification de la connexion
    try {
        $conn = new PDO("mysql:host=$host;dbname=$bdd", "$user", "$mdp");
        $conn->setAttribute($attribute, $value);
    } catch (PDOException $e) {
        print "Erreur connexion !: " . $e->getMessage() . "<br/>";
        die();
    }

    // Récupération de l'utilisateur
    $sql = "SELECT ID_utilisateur FROM utilisateur WHERE mail = '$mail' AND password = '$password'";
    $result = $conn->query($sql);
    $user = $result->fetchAll();


    // Vérification de l'existance de l'utilisateur
    if ($user) {
        $_SESSION['logged_in'] = true;
        $_SESSION['ID_utilisateur'] = $user['ID_utilisateur'];
        header('Location: /php/accueil.php');
        exit;
    } else {
        $error = "Incorrect username or password.";
    }
}
// On démarre Smarty AVANT d'écrire du code HTML	
require '../vendor/autoload.php';
// Creer un objet Smarty
$smarty = new Smarty();
// Definir les chemins des templates
$smarty->setTemplateDir('../tpl/');
// Afficher les templates
$smarty->display('index.tpl');
$smarty->display('footer.tpl');
