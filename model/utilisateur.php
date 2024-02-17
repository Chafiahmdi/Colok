<?php 
    require_once('../model/connexion.php');


    function addUtilisateur($nom,$prenom,$date_naissance,$email,$mdp){
        $conn = connexion();
        $data = [
            'nom' => $nom,
            'prenom' => $prenom,
            'date_naissance' => $date_naissance,
            'email' => $email,
            'mdp' => password_hash($mdp,PASSWORD_DEFAULT),
            'role' => 'colocataire'
    

        ];
        

        $sql = "INSERT INTO utilisateur (nom,prenom,date_naissance,email,mdp,role) 
            values(:nom,:prenom,:date_naissance,:email,:mdp,:role) "; 

       
    
        $stmt = $conn->prepare($sql);
        
        
        $stmt->execute($data);

        // Fermeture de la connexion
        $conn = null;
    }

    function getUserByMaison($maison_id){
        $conn = connexion();

        // Requête pour obtenir les tâches liées à l'utilisateur actuel
        $sql = "SELECT * FROM utilisateur where maison_id = :maison_id ";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':maison_id', $maison_id);
        $stmt->execute();

        $data = $stmt->fetchAll();
        return $data;
    }

    function getUser($id) {
        $conn = connexion();
    
        // Requête pour obtenir les informations de l'utilisateur
        $sql = "SELECT * FROM utilisateur WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        if ($stmt->execute()) {
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            $conn = null; // Fermez la connexion
            return $data;
        } else {
            // Erreur lors de l'exécution de la requête
            return false;
        }
    }
    

    function updateUser($id,$nom,$prenom,$date_naissance,$photo,$allergies,$email,$mdp){
        $conn = connexion();
        $sql = "UPDATE utilisateur SET nom = ? , prenom = ? ,date_naissance= ? , photo_profil = ? , allergies = ? , email= ? , mdp = ? WHERE id = ?";
        $stmt= $conn->prepare($sql);
        $stmt->execute([$nom, $prenom, $date_naissance, $photo,$allergies,$email,$mdp ,$id]);
        $conn = null;
    
    }


?>