<?php session_start();
    require_once('../model/utilisateur.php');
    require_once('../model/maison.php');
    $user = getUser($_SESSION['id']);
    $userByMaison = getUserByMaison($user['maison_id']);

    $maison = getMaison($user['maison_id']);
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../build/styles/forms.css" />
    <link rel="stylesheet" href="../build/styles/footer.css" />
    <script src="../js/forms.js" defer></script>
    <link rel="stylesheet" href="../build/styles/nav.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../sass/styles/nav.scss" />
    <script src="../js/app.js"defer></script>
    <link rel="stylesheet" href="../build/styles/bell.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Formulaire d'inscription</title>
  </head>
  <body>

  <?php include("nav.php")?>
  <style>
        .info-container {
            margin-bottom: 15px;
     
        }

        .info-label {
            font-weight: bold;
            margin-right: 15px;
        }

        .icon {
            margin-right: 5px;
        }
    </style>
    <form action="../controller/maisonController.php" method="POST" class="form">

      <input type="hidden" name="addMaison">
      <div class="container-title z-40">
    <h1 class="page-title">Profil maison</h1>
    <div class="trait"></div>
  </div>
      <!-- <h1 class="text-center">Formulaire d'inscription</h1> -->
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div>
        
        <div
          class="progress-step progress-step-active"
          data-title="Profil Maison"></div>
        <div class="progress-step" data-title="Supplément d'information"></div>
        <div class="progress-step" data-title="ListeColok"></div>
        <div class="progress-step" data-title="Charte"></div>
      </div>
       <!-- Steps -->
       <div class="form-step form-step-active">
            <div class="display">
                <div class="display-input">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="card border p-4 rounded-lg">
                            <h5 class="font-bold"><i class="fas fa-home icon"></i> Surface</h5>
                            <p><?php echo $maison['superficie'] ?> m²</p>
                        </div>
                        <div class="card border p-4 rounded-lg">
                            <h5 class="font-bold"><i class="fas fa-bed icon"></i> Pièces</h5>
                            <p><?php echo $maison['nb_room'] ?></p>
                        </div>
                        <div class="card border p-4 rounded-lg">
                            <h5 class="font-bold"><i class="fas fa-users icon"></i> Chambres</h5>
                            <p><?php echo $maison['nb_colocataire'] ?></p>
                        </div>
                        <div class="card border p-4 rounded-lg">
                            <h5 class="font-bold"><i class="fas fa-map-marker icon"></i> Adresse</h5>
                            <p><?php echo $maison['adresse'] ?></p>
                        </div>
                        <div class="card border p-4 rounded-lg">
                            <h5 class="font-bold"><i class="fas fa-envelope icon"></i> Code postal</h5>
                            <p><?php echo $maison['code_postal'] ?></p>
                        </div>
                        <div class="card border p-4 rounded-lg ">
                            <h5 class="font-bold"><i class="fas fa-city icon"></i> Ville</h5>
                            <p><?php echo $maison['ville'] ?></p>
                        </div>
                        <div class="card border p-4 rounded-lg col-span-2">
                            <h5 class="font-bold"><i class="fas fa-info-circle icon"></i> Description</h5>
                            <p><?php echo $maison['description'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
  <div class="">
          <a href="#" class="btn btn-next width-50 mx-auto">Suivant</a>
        </div>
  </div>
        
      </div>
     
   
<div class="form-step card border p-4 rounded-lg mx-auto">
    <div class="profile-picture">
        <img src="../assets/images/house-illustration.jpeg" alt="" />
    </div>
    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 flex flex-items center">
        <div class="card border p-4 rounded-lg hover:shadow-lg transition duration-300">
            <span class="w-48">Cuisine équipée</span>
            <?php 
                if($maison['IscuisineEquipee'] == "oui"){ ?>
                  <i>✅</i>
                <?php }
                else{?>
                  <i>❌</i>
               <?php }?>
        </div>
        <div class="card border p-4 rounded-lg hover:shadow-lg transition duration-300">
            <span class="w-48">Jardin</span>
            <?php 
                if($maison['Isjardin'] == "oui"){ ?>
                  <i>✅</i>
                <?php }
                else{?>
                  <i>❌</i>
               <?php }?>
        </div>
        <div class="card border p-4 rounded-lg hover:shadow-lg transition duration-300">
            <span class="w-48">Climatisation</span>
            <?php 
                if($maison['Isclimatisation'] == "oui"){ ?>
                  <i>✅</i>
                <?php }
                else{?>
                  <i>❌</i>
               <?php }?>
        </div>
        <div class="card border p-4 rounded-lg hover:shadow-lg transition duration-300">
            <span class="w-48">Chambre meublée</span>
            <?php 
                if($maison['chambre_meuble'] == "oui"){ ?>
                  <i>✅</i>
                <?php }
                else{?>
                  <i>❌</i>
               <?php }?>
        </div>
        <div class="card border p-4 rounded-lg hover:shadow-lg transition duration-300">
            <span class="w-48">Salle de bain partagée</span>
            <?php 
                if($maison['salleDeBainPartage'] == "oui"){ ?>
                  <i>✅</i>
                <?php }
                else{?>
                  <i>❌</i>
               <?php }?>
        </div>
    </div>

        <div class="btns-group">
          <a href="#" class="btn btn-prev">Précédent</a>
          <a href="#" class="btn btn-next">Suivant</a>
        </div>
      </div>
      <div class="form-step">
      <div class="profile-picture">
      <img src="../assets/images/house-illustration.jpeg" alt="maison img"/>
      </div>
      <div class="columns-3" >

      <?php foreach ($userByMaison as $userMaison) { ?>
          <div class="max-w-sm rounded overflow-hidden shadow-lg" style="margin-bottom: 1rem;">
              
              <?php if ($userMaison['photo_profil'] == "") { ?>
                <img style="width: 10vw;height: 10vw; border-radius: 50%;margin:auto;object-fit: cover;" src="../assets/images/profile-user-svgrepo-com (1).svg" alt="Photo de profil par défaut" />
              <?php } else { ?>
                <img style="width: 10vw;height: 10vw; border-radius: 50%;margin: auto;object-fit: cover" src="../assets/images/<?php echo $userMaison['photo_profil']; ?>" alt="Photo de profil de l'utilisateur" />
              <?php } ?>
              <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2"><?php echo $userMaison['nom']; ?></div>
                <div class=" text-xl mb-2"><?php echo $userMaison['prenom']; ?></div>
                <p class="text-gray-700 text-base">
                  Allergies : <?php echo $userMaison['allergies'] ?> 
                </p>
              </div>
              
          </div>
      
          
      
      <?php } ?>

      </div>
      
   
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Précédent</a>
          <a href="#" class="btn btn-next">Suivant</a>
        </div>
      </div>
      </div>
      <div class="form-step">
        <div class="rules-container mx-auto md:58rem">
        <h2 class="rules-title">Charte - Règlement intérieur</h2>
        <p class="text-justify">
          <p>Bienvenue sur Colok, la plateforme de gestion de colocation qui facilite la vie en communauté. 
Afin de maintenir un environnement harmonieux et respectueux pour tous les colocataires, nous vous prions de respecter les règles et directives suivantes :
</p>
<p>1. Respect et Communication :

Respectez la vie privée et l'espace personnel de vos colocataires.
Communiquez ouvertement et honnêtement. Résolvez les conflits de manière constructive, en encourageant le dialogue.
</p>
<p>2. Tâches Ménagères :

Respectez le partage équitable des tâches ménagères préétablies par l'application.
Marquez les tâches comme "terminées" uniquement lorsque vous avez réellement accompli la tâche conformément à sa description.
</p>
<p>3. Gestion des Achats :

Contribuez aux achats de manière équitable, en vous conformant à la répartition des dépenses préétablie.
Mettez à jour les listes de courses de manière à garantir que les besoins de tous les colocataires sont pris en compte.
</p>
<p>4. Événements et Réunions :

Planifiez et participez aux événements en respectant les accords établis pour chaque occasion.
Contribuez aux décisions lors des réunions de colocation pour maintenir une communication efficace.
</p>
<p>5. Entretien des Espaces Communs :

Maintenez les espaces communs propres et organisés.
Signalez tout problème ou dommage aux responsables de la colocation.
</p>
<p>6. Invités :

Informez vos colocataires de la venue d'invités.
Veillez à ce que les invités respectent les règles de la colocation.
</p>
<p>7. Sécurité :

Assurez-vous que la sécurité de la colocation est respectée, en particulier en ce qui concerne l'accès aux espaces partagés.
</p>
<p>8. Utilisation Responsable des Équipements :

Utilisez les équipements et les ressources communes de manière responsable.
Signalez tout problème ou dysfonctionnement.
</p>
<p>9. Respect de l'Environnement :

Encouragez des pratiques respectueuses de l'environnement, comme le recyclage et l'économie d'énergie.
</p>
<p>10. Sanctions :
En cas de non-respect répété des règles de la colocation, des sanctions pourront être appliquées, telles que la révision des tâches attribuées, des pénalités financières ou, dans les cas extrêmes, la résiliation du contrat de colocation.
</p>
<p>Nous vous encourageons à participer activement à la colocation et à faire de votre mieux pour maintenir un environnement harmonieux. En cas de questions ou de préoccupations, n'hésitez pas à contacter les administrateurs du site ou les responsables de la colocation.
</p>


En signant ce règlement intérieur, vous vous engagez à respecter ces règles pour le bien de la communauté.</p>
        <div>
        <div>
          
          <label class="rules-label" for="confirmRules">
          <input
            class="checkbox"
            type="checkbox"
            name="confirmRules"
            id="confirmRules"
          />  
          J'accepte la charte du règlement intérieur</label>

        </div>
        <div>
          <label class="rules-label" for="confirmCondition">
          <input
            class="checkbox"
            type="checkbox"
            name="confirmCondition"
            id="confirmCondition"
          />
          J'accepte les conditions d'utilisation</label>
        </div>
      </div>
      </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Précédent</a>
          <input type="submit" value="Confirmer" class="btn" />
        </div>
      </div>
    </form>
    <?php require('footer.php'); ?>
  </body>
</html>