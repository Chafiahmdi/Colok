<?php 
    
    include('../model/maison.php');
    
    if(isset($_POST['addMaison'])){
        echo 'test';
        $adresse = $_POST['adresse'];
        $house_area = $_POST['house-area'];
        $room = $_POST['room'];
        $nb_chambre = $_POST['bedroom'];
        $code_postal = $_POST['code_postal'];
        $ville = $_POST['ville'];
        $description = $_POST['description'];
        $isCuisineEquipee = $_POST['isCuisineEquipee'];
        $jardin = $_POST['jardin'];
        $isClim = $_POST['isClim'];
        $isMeuble = $_POST['isMeuble'];
        $isBainPartage = $_POST['isBainPartage'];
        $isadmin = "false";


        addMaison($adresse,$ville,$code_postal,$house_area,$nb_chambre,$description,$room,$isadmin,$isCuisineEquipee,$jardin,$isMeuble,$isClim,$isBainPartage);

        $message = "maison ajouter avec succées";
        header("Location: ../view/home.php?msg=$message");
    }
    

?>