<?php
    require_once('connexion.php');


    function getNotifByUser(){

    
   
        $user_id = $_SESSION['id'];
        
        $conn = connexion();

        // Requête pour obtenir les tâches liées à l'utilisateur actuel
        $sql = "SELECT *, notif.id as notif_id,notif.statut as notif_statut FROM notif INNER JOIN schedule_list ON notif.tache_id = schedule_list.id
                WHERE notif.user_id = :user_id AND  notif.statut = 'non lu' ";
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


    function LireNotif($id,$statut){
        $conn = connexion();
        $sql = "UPDATE notif SET statut = ?  WHERE id = ?";
        $stmt= $conn->prepare($sql);
        $stmt->execute([$statut ,$id]);
        $conn = null;
    }


?>