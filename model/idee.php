<?php
require_once('../model/connexion.php');

function addIdee($titre, $description, $user_id) {
    $conn = connexion();
    $data = [
        'titre' => $titre,
        'description' => $description,
        'user_id' => $user_id
    ];

    $sql = "INSERT INTO idee (titre, description, user_id) VALUES (:titre, :description, :user_id)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);

    // Fermeture de la connexion
    $conn = null;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = $_POST["titre"];
    $description = $_POST["description"];
    $user_id = $_POST["user_id"];

    addIdee($titre, $description, $user_id);

    // Vous pouvez ajouter des messages de confirmation ici
}
function getidee(){
    $conn = connexion();

    // Requête pour obtenir les tâches liées à l'utilisateur actuel
    $sql = "SELECT * FROM idee  ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $data = $stmt->fetchAll();
    return $data;
}
?>
