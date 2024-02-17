<?php

session_start();

require_once('../model/connexion.php');



if(isset($_POST['email'])){
    var_dump($_POST['email']);
    $conn = connexion();

    $email = $_POST['email'];

    $password = $_POST['mdp'];



    $stmt = $conn->query("SELECT * FROM utilisateur  WHERE email ='$email'");

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    

    if ($data[0] && password_verify($password, $data[0]['mdp'])) {

    
        $_SESSION['id'] = $data[0]['id'];
        $_SESSION["nom"] = $data[0]['nom'];
        $_SESSION["prenom"] = $data[0]['prenom'];
        $_SESSION["email"] = $data[0]['email'];
        $_SESSION["mdp"] = $data[0]['mdp'];
        $_SESSION["date_naissance"] = $data[0]['date_naissance'];
        $_SESSION["role"] = $data[0]['role'];
        $_SESSION["photo_profil"] = $data[0]['photo_profil'];
        $_SESSION["allergies"] = $data[0]['allergies'];
        $_SESSION["maison_id"] = $data[0]['maison_id'];


       
        header("Location: ../view/home-connecte.php");
 

    } else {

        $erreur = "Mot de passe ou adresse email invalide";
        header("Location: ../view/signIn.php?erreur=$erreur");

    }

}


