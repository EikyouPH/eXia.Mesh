<?php

class Utilisateurs {
    
    private $connexion;
    
    public function __construct($host, $dbname, $username, $password) {
        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );
        try {
            $this->connexion = new PDO($dsn, $username, $password, $options);
        } catch(PDOException $e) {
            throw new Exception("Erreur lors de la connexion à la base de données : " . $e->getMessage());
        }
    }
    
    public function getUtilisateurs() {
        $requete = $this->connexion->query("SELECT * FROM utilisateurs");
        $utilisateurs = $requete->fetchAll();
        return $utilisateurs;
    }
    
    public function getUtilisateurParId($id) {
        $requete = $this->connexion->prepare("SELECT * FROM utilisateurs WHERE id = ?");
        $requete->execute([$id]);
        $utilisateur = $requete->fetch();
        return $utilisateur;
    }
    
    // Ajouter d'autres fonctions pour récupérer des informations spécifiques
    
}


?>