
<?php
session_start();
include('../model/connexion.php');
$conn = connexion(); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = $_POST["titre"];
    $description = $_POST["description"];
    $user_id = $_SESSION["id"];

   
    try {
        // Préparez la requête d'insertion
        $sql = "INSERT INTO idee (titre, description, user_id) VALUES (:titre, :description, :user_id)";
        $stmt = $conn->prepare($sql);

        // Associez les valeurs aux paramètres de la requête
        $stmt->bindParam(':titre', $titre);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':user_id', $user_id);

        // Exécutez la requête d'insertion
        $stmt->execute();

        // Affichez un message de confirmation
    header('location:../view/idees.php');
    } catch (PDOException $e) {
     
        echo "Erreur : " . $e->getMessage();
    }

   
    $conn = null;
}
?>
