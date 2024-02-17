<?php 

    require('../model/utilisateur.php');
    
    if(isset($_POST['addUser'])){
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['addUser']  === 'addUser') {
            
            var_dump($_POST['nom']);
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $date_naissance = htmlspecialchars($_POST['date_naissance']);
            $email = htmlspecialchars($_POST['email']);
            $mdp = htmlspecialchars($_POST['mdp']);
         
              

       
                addUtilisateur($nom,$prenom,$date_naissance,$email,$mdp);
            $message = "merci pour votre inscription";
            // Rediriger vers la liste des contacts
            header("Location: ../view/home.php?msg=$message");
            exit;
        }
    }
    

?>

