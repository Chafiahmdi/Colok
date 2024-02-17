<?php
require_once('db-connect.php');

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo "<script> alert('Error: No data to save.'); window.location.replace('./'); </script>";
    $conn->close();
    exit;
}

extract($_POST);
$allday = isset($allday);

if (empty($id)) {
    $sql = "INSERT INTO `schedule_list` (`title`, `description`, `start_datetime`, `end_datetime`) VALUES ('$title', '$description', '$start_datetime', '$end_datetime')";
} else {
    $sql = "UPDATE `schedule_list` SET `title` = '$title', `description` = '$description', `start_datetime` = '$start_datetime', `end_datetime` = '$end_datetime' WHERE `id` = $id";
}

$save = $conn->query($sql);

if ($save) {
    // Renvoyer une réponse JSON avec un message de succès
    echo json_encode(array("status" => "success", "message" => "Votre événement a bien été enregistré.", "eventId" => $id));
} else {
    // Renvoyer une réponse JSON avec un message d'erreur
    echo json_encode(array("status" => "error", "message" => "Erreur lors de l'enregistrement de l'événement."));
}

$conn->close();
?>
