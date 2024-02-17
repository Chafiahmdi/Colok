<?php
// Inclure le fichier de connexion à la base de données
require_once('../model/connexion.php');

// Fonction pour ajouter un profil utilisateur
function addProfile($nom, $prenom, $date_naissance, $email, $mdp, $role, $allergies, $photo_profil, $maison_id) {
    // Connexion à la base de données
    $conn = connexion();

    // Préparer la requête SQL d'insertion
    $sql = "INSERT INTO utilisateur (nom, prenom, date_naissance, email, mdp, role, allergies, photo_profil, maison_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    // Préparation de la requête
    $stmt = $conn->prepare($sql);

    // Exécution de la requête
    if ($stmt->execute([$nom, $prenom, $date_naissance, $email, $mdp, $role, $allergies, $photo_profil, $maison_id])) {
        return true; // L'ajout a réussi
    } else {
        return false; // L'ajout a échoué
    }
}
?>
