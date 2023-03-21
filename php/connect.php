<?php
$host = 'main.leskientz.ovh';
$bdd = 'projet_web';
$user = 'api';
$mdp = 'Ludovic03';
$attribute = PDO::ATTR_ERRMODE;
$value = PDO::ERRMODE_EXCEPTION;
try {
    $conn = new PDO("mysql:host=$host;dbname=$bdd", "$user", "$mdp");
    $conn -> setAttribute($attribute, $value);
} catch (PDOException $e) {
    print "Erreur connexion !: " . $e->getMessage() . "<br/>";
    die();
}
?>