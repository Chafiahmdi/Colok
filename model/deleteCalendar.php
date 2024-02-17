<?php
require_once('../model/connexion.php');
$conn = connexion();
if (!isset($_GET['id'])) {
    echo "<script> alert('Undefined Schedule ID.'); location.replace('../view/calendrier.php') </script>";
    exit;
}

// Obtenez l'ID de l'événement à supprimer depuis la requête GET
$scheduleId = $_GET['id'];

if ($conn) {
    try {
        // Utilisation d'une requête préparée pour supprimer l'événement
        $stmt = $conn->prepare("DELETE FROM `schedule_list` WHERE id = :scheduleId");
        $stmt->bindParam(':scheduleId', $scheduleId, PDO::PARAM_INT);
        $delete = $stmt->execute();

        if ($delete) {
            echo "<script> alert('Votre évènement à bien été supprimer'); location.replace('../view/calendrier.php') </script>";

        } else {
            echo "<pre>";
            echo "An Error occurred.<br>";
            echo "Error: " . $stmt->errorInfo()[2] . "<br>"; // Utilisez errorInfo() pour obtenir l'erreur
            echo "SQL: DELETE FROM `schedule_list` WHERE id = :scheduleId<br>";
            echo "</pre>";
        }
    } catch (PDOException $e) {
        echo "<pre>";
        echo "An Error occurred.<br>";
        echo "Error: " . $e->getMessage() . "<br>";
        echo "SQL: DELETE FROM `schedule_list` WHERE id = :scheduleId<br>";
        echo "</pre>";
    }

    // N'oubliez pas de fermer la connexion à la fin
    $conn = null;
} else {
    echo "Impossible de se connecter à la base de données.";
}
?>  
