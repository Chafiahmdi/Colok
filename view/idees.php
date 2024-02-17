

<?php session_start();
require_once('../model/utilisateur.php');
require_once('../model/idee.php');
$idees = getidee();
$user = getUser($_SESSION['id']);
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../build/styles/footer.css">
<link rel="stylesheet" href="../build/styles/idees-card.css">
<link rel="stylesheet" href="../build/styles/navCalendar.css" />
<link rel="stylesheet" href="../sass/styles/_variables.scss" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">



<script src="../js/bell.js"></script>


<head>

    <title>Colok - Boîte à idées</title>
 <style>

/* Définition des variables CSS */
:root {
  --grey: #7d7d7d;
  --blue: #8ECAE6;
}

/* Styles pour le titre h2 */
h2 {
  font-size: 2rem;
  text-align: center;
  color: var(--grey);
  margin-bottom: 1.5rem;
}

/* Styles pour le trait */
.trait {
  width: 12rem;
  border-radius: 9999px;
  background-color: var(--blue); /* Utilisez background-color au lieu de color */
  height: 1.25rem;
  position: absolute;
  z-index: -2;
  margin-top: 5rem;
}

/* Styles pour le corps de la page */
body {
  color: #001e25;
  letter-spacing: 0.05em;
  line-height: 1.5;
  min-width: fit-content;
}

/* Styles pour le conteneur "fenetre" */
.fenetre {
  text-align: center;
  padding-top: 2rem;
  position: relative;
}

/* Définition des variables CSS */
:root {
  --grey: #1a375d;
  --blue: #8ECAE6;
}

/* Styles pour le titre h2 */
h2 {
  font-size: 2rem;
  text-align: center;
  color: var(--grey);
  margin-bottom: 1.5rem;
}

/* Styles pour le trait */
.trait {
  width: 13rem;
  border-radius: 9999px;
  background-color: var(--blue); /* Utilisez background-color au lieu de color */
  height: 1.25rem;
  position: absolute;
  z-index: -2;
  margin-top: 2rem;
  bottom: 1.5rem;
}

/* Styles pour le corps de la page */
body {
  color: #001e25;
  letter-spacing: 0.05em;
  line-height: 1.5;
  min-width: fit-content;
}

/* Styles pour le conteneur "fenetre" */
.fenetre {
  text-align: center;
  padding-top: 2rem;
  position: relative;
}

/* Styles pour le conteneur "container-titre" */
.container-titre {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-around;
  margin-bottom: 0;
  margin-top: -2rem;
}
</style>





</head>

<body>

<!-- <header class="w-full text-gray-700 bg-white sticky z-50 top-0 drop-shadow-md"> -->
     <?php include("navCalendar.php")?>
     
   <!-- </header> -->

    <main>
       
        <div class="fenetre relative  bg-[url('../assets/images/rrr.svg')] bg-no-repeat bg-center -z-30  md:bg-[right_top_1rem] ">

                <div class="container-titre">
                    <h2>Boîte à idées</h2>
                    <div class="trait"></div>
                </div>

                       
<!-- cards -->

<div class="un">
<?php foreach ($idees as $idee) { ?> 
  <div class="cd">
    <div class="illust-card"><img src="../assets/images/ampoule.png" alt=""></div>
    <h2> <?php echo $idee["titre"] ?></h2>
    <p> <?php echo $idee["description"] ?></p>
  </div>
   <?php } ?>
</div> 
         <button style="background-color: #8ECAE6; border-radius: 2rem; padding:8px; margin-top: 15rem; margin-bottom: 3rem;border:none; font-weight:bold; " class=" btn-add"><a href="form-idees.php" >Proposer mon idée</a></button>
<!-- cards -->
                <!-- </div>
        
        </div> -->
    </main>

    <?php require('footer.php'); ?>

    <!-- lien js vers autre composants https://tailwind-elements.com/docs/standard/getting-started/quick-start/ -->
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>

</body>

</html>
