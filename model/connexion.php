<?php

function connexion(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "colok_db";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Définir le mode d'erreur PDO sur exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "Échec de la connexion : " . $e->getMessage();
        return null; // Retourne null en cas d'échec de la connexion
    }
}

// Utilisation de la fonction pour obtenir la connexion



?>
