<?php

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
    $conn -> setAttribute($attribute, $value);
} catch (PDOException $e) {
    print "Erreur connexion !: " . $e->getMessage() . "<br/>";
    die();
}

// Récupération de l'utilisateur
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  header("Location: /index.php");
  exit;
}

// On démarre Smarty AVANT d'écrire du code HTML	
require '../vendor/autoload.php';

// Creer un objet Smarty
$smarty = new Smarty();

// Definir les chemins des templates
$smarty->setTemplateDir('../tpl/');
?>