<?php
session_start();
// Inclure le fichier de connexion à la base de données
require_once('../model/connexion.php');
require_once('../model/utilisateur.php');

$user = getUser($_SESSION['id']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    
        if (isset($_POST['submit'])) {
            // Récupérer les données du formulaire
            $id = $_POST['id'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $date_naissance = $_POST['date_naissance'];
            $email = $_POST['email'];
           
            if($_POST['mdp'] == ""){
                $mdp = $user['mdp'];
               
            }
            else{
                $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT); // Hasher le mot de passe
            }
           
            $allergies = $_POST['allergies'];

            if($_FILES['fileToUpload']['name'] != ""){
                $photo_profil = $_FILES['fileToUpload']['name'];
                if($photo_profil != ""){
                    $target_dir = "../images/";
                    $target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
                    // Check if image file is a actual image or fake image
                    if(isset($_POST["submit"])) {
                    $check = getimagesize($_FILES['fileToUpload']["tmp_name"]);
                    if($check !== false) {
                        echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        echo "File is not an image.";
                        $uploadOk = 0;6;
                    }
                    }
    
                   
                    // Check file size
                    if ($_FILES['fileToUpload']["size"] > 5000000) {
                    echo "Sorry, your file is too large.";
                    $uploadOk = 0;
                    }
    
                    // Allow certain file formats
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                    }
    
                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                    echo "Sorry, your file was not uploaded.";
                    // if everything is ok, try to upload file
                    } else {
                    if (move_uploaded_file($_FILES['fileToUpload']["tmp_name"], $target_file)) {
                        echo "The file ". htmlspecialchars( basename( $_FILES['fileToUpload']["name"])). " has been uploaded.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                    }
                }
            }

            else{
                $photo_profil = $_POST['photo'];
                
            }
            


           
           
            
            updateUser($id,$nom,$prenom,$date_naissance,$photo_profil,$allergies,$email,$mdp);

            header("Location: ../view/profile.php");
        }
        }
    
?>
