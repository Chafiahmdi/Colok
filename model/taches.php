<?php
require('../model/connexion.php');

// Fonction pour lister les tâches de l'utilisateur
function listeTache() {
    // Vérifier si une session est active
    if (isset($_SESSION)) {
        $user_id = $_SESSION['id'];
        $conn = connexion();

        // Requête pour obtenir les tâches liées à l'utilisateur actuel
        $sql = "SELECT * FROM schedule_list  
                WHERE user_id = :user_id AND NOT statut = 'Terminé' ";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->execute();

        $data = $stmt->fetchAll();

        // Vérifier si $data n'est pas vide avant de retourner les résultats
        if (!empty($data)) {
            return $data;
        } else {
            // Si $data est vide, vous pouvez retourner un tableau vide (ou une autre valeur par défaut)
            return array();
        }
    }
}

// Fonction pour ajouter une nouvelle tâche
function addTache($tache_id, $interval, $occurence, $user_id) {
    $conn = connexion();

    // Préparation des données à insérer
    $data = [
        'tache_id' => $tache_id,
        'interval' => $interval,
        'occurence' => $occurence,
        'create_date' => date('d/m/Y'), // Corrigé le format de la date
        'statut' => 'en cours',
        'user_id' => $user_id
    ];

    // Requête d'insertion
    $sql = "INSERT INTO taches (tache_id, interval, occurence, create_date, statut, user_id) 
            VALUES (:tache_id, :interval, :occurence, :create_date, :statut, :user_id)";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);

    // Fermeture de la connexion
    $conn = null;
}

    function setStatut($id,$statut){
        $conn = connexion();
        $sql = "UPDATE schedule_list SET statut = ?  WHERE id = ?";
        $stmt= $conn->prepare($sql);
        $stmt->execute([$statut ,$id]);
        $conn = null;
    }


    function DeleteTache($id){
        $conn = connexion();
        
        $sql = "DELETE FROM schedule_list WHERE id=?";
        $stmt= $conn->prepare($sql);
        $stmt->execute([$id]);
    }
?>
