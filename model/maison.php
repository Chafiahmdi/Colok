<?php 


require_once('connexion.php');


function addMaison($adresse,$ville,$code_postal,$superficie,$nb_colocataire,$description,$room,$isAdmin,$IscuisineEquipee,$Isjardin,$chambre_meuble,$Isclimatisation,$salleDeBainPartage){

    $conn = connexion();
    $data = [
        'adresse' => $adresse,
        'ville' =>$ville,
        'code_postal' => $code_postal,
        'superficie' => $superficie,
        'nb_colocataire' => $nb_colocataire,
        'description' => $description,
        'isAdmin' =>$isAdmin,
        'nb_room'=>$room,
        'IscuisineEquipee' => $IscuisineEquipee,
        'Isjardin' => $Isjardin,
        'chambre_meuble' => $chambre_meuble,
        'Isclimatisation' => $Isclimatisation,
        'salleDeBainPartage' => $salleDeBainPartage 
    ];
    $sql = "INSERT INTO maison (adresse,ville,code_postal,superficie,nb_colocataire,description,nb_room,isAdmin,IscuisineEquipee,Isjardin,chambre_meuble,Isclimatisation,salleDeBainPartage) 
    values(:adresse,:ville,:code_postal,:superficie,:nb_colocataire,:description,:nb_room,:isAdmin,:IscuisineEquipee,:Isjardin,:chambre_meuble,:Isclimatisation,:salleDeBainPartage)";

    $stmt = $conn->prepare($sql);
            
            
    $stmt->execute($data);

    // Fermeture de la connexion
    $conn = null;

} 

    function getMaison($id){
        $conn = connexion();
    
        // Requête pour obtenir les informations de l'utilisateur
        $sql = "SELECT * FROM maison WHERE id = :id";
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

?>