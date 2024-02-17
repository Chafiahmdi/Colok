<?php
session_start();
require_once('../model/connexion.php');
$statut = "en cours";

$conn = connexion();
// Assurez-vous que la requête est de type POST
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo json_encode(array("status" => "error", "message" => "Erreur : aucune donnée à enregistrer."));
    exit;
}

extract($_POST);



$allday = isset($allday);

if (empty($id)) {
    $sql = "INSERT INTO `schedule_list` (`title`, `description`, `start_datetime`, `end_datetime`, `type`, `user_id`, `statut`, `type_tache`) VALUES (:title, :description, :start_datetime, :end_datetime, :type, :user_id,:statut, :type_tache)";
} else {
    $sql = "UPDATE `schedule_list` SET `title` = :title, `description` = :description, `start_datetime` = :start_datetime, `end_datetime` = :end_datetime, `type` = :type, `user_id` = :user_id, `statut` = :statut , `type_tache` = :type_tache WHERE `id` = :id";
}


if ($conn) {
    
    try {

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':description', $description, PDO::PARAM_STR);
        $stmt->bindParam(':start_datetime', $start_datetime, PDO::PARAM_STR);
        $stmt->bindParam(':end_datetime', $end_datetime, PDO::PARAM_STR);
        $stmt->bindParam(':type', $type, PDO::PARAM_STR);
        $stmt->bindParam(':user_id', $_SESSION['id'], PDO::PARAM_INT);
        $stmt->bindParam(':statut', $statut, PDO::PARAM_STR);
        $stmt->bindParam(':type_tache', $type_tache, PDO::PARAM_STR);
        
        if (!empty($id)) {
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        }
        


   $save = $stmt->execute();

if ($save) {
    // Utilisez la réponse JSON pour indiquer que l'enregistrement a réussi
    echo "<script> alert('Votre événement a bien été ajouté'); location.replace('../view/calendrier.php') </script>";

} else {
    // Utilisez également la réponse JSON pour indiquer que l'enregistrement a échoué
    echo json_encode(array("status" => "error", "message" => "Erreur lors de l'enregistrement de l'événement."));
}
} catch (PDOException $e) {
// En cas d'erreur, renvoyez une réponse JSON d'erreur
echo json_encode(array("status" => "error", "message" => "Une erreur s'est produite lors de l'enregistrement."));
}

// Assurez-vous de fermer la connexion à la fin
$conn = null;
} else {
// En cas d'impossibilité de se connecter à la base de données, renvoyez une réponse JSON d'erreur
echo json_encode(array("status" => "error", "message" => "Impossible de se connecter à la base de données."));
}
?>