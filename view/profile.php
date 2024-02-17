

<?php session_start();
require_once('../model/utilisateur.php');


// Vérifiez si la session contient 'id' et que la fonction getUser renvoie une valeur
if (isset($_SESSION['id'])) {
    $user = getUser($_SESSION['id']);
}



?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../build/styles/profile.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="../js/app.js"defer></script>
    <link rel="stylesheet" href="../build/styles/nav.css" />
    <link rel="stylesheet" href="../build/styles/footer.css" />
  
   
   <script src="../js/bell.js"></script>
    <title>Profil utilisateur</title>
    
  </head>
 
  <body>
     <?php include("nav.php")?>
   
<div class="form-wrapper">
<form style="display: none;"  action="../controller/profileControlleur.php" method="post" class="form mt-12" enctype="multipart/form-data">
<a href="#" id="closeFormButton" class="close-button">
      <i class="fas fa-times"></i>
    </a>
<h1 class="page-title">Mon profil</h1>
    <div class="profile-picture">  
    <a href="#imageFile" onclick="poutpout()" class="profile-link">
    <?php  if(isset($user['photo_profil'])){ ?>  <img  src="../assets/images/profile(1).svg?php echo $user['photo_profil'] ?> " id="blah" alt="">     <i id="mon-icon" class="fas fa-camera"></i> <?php }
        else{?>
            <img src="../assets/images/profile(1).svg" id="blah" alt="">
       <?php  } ?>
   

	

    </a>
    </div> 
    <h2 class="form-title">Information personnelle</h2>

    <div class="form-step form-step-active">
        <div class="display">
            <div class="display-input">
                <div class="name-container">
                    <input type="hidden" name="id" value="<?php echo $user['id'] ?>" >
                  
                    <div class="input-group-name"> 

                          <label for="nom"><i class="fas fa-user"></i>Nom<span>*</span></label>
                        <input type="text" name="nom" value="<?php echo $user['nom'] ?>" id="nom" required placeholder="Votre nom" />
                    </div>
                    <div class="input-group-name">
                        <label for="prenom"><i class="fas fa-user"></i>Prénom<span>*</span></label>
                        <input type="text" name="prenom" id="prenom" value="<?php echo $user['prenom'] ?>" required placeholder="Votre prénom" />
                    </div>
                </div>

                <div class="input-group">
                    <label for="date_naissance"><i class="fas fa-calendar"></i>Date de naissance<span>*</span></label>
                    <input type="date" name="date_naissance" value="<?php echo $user['date_naissance'] ?>" id="date_naissance" required placeholder="Votre date de naissance" />
                </div>

                <div class="input-group">
                    <label for="email"><i class="fas fa-envelope"></i>Adresse mail<span>*</span></label>
                    <input type="email" name="email" id="email" value="<?php echo $user['email'] ?>"  required placeholder="Votre adresse e-mail" />
                </div>


<div class="input-group">
                <div class="main-password">
                  
  <label for="mdp"><i class="fas fa-lock"></i>Mot de passe</label>

  <input class="form-control input-password" type="password" name="mdp"  id="mdp" placeholder="Votre mot de passe" />
  <a class="icon-view" id="eye">
  <i class="fas fa-eye"></i>
  </a>
</div>
</div>               

                <div class="input-group">
                    <label for="allergies"><i class="fas fa-allergies"></i>Allergies</label>
                    <input type="text" name="allergies"  value="<?php echo $user['allergies'] ?>" id="allergies" placeholder="Vos allergies" />
                </div>

                <div class="input-group">
                <input type="hidden" name='photo' value="<?php echo $user['photo_profil'] ?>">
                <input type="file" id="imageFile"  name="fileToUpload" accept="image/*" style="display: none;">
                </div>
                <div class="btn-center">
                    <button class="form-btn" type="submit" name="submit">Valider</button>
                </div>
            </div>
        </div>
    </div>
        </div>
</form>

<div class="card-container" id="card">
<figure class="snip1336">
  <img src="../assets/images/house-illustration.jpeg" alt="sample87" />
  <figcaption>
    <?php 
    
        if($user['photo_profil'] == ""){ ?>


          <img src="../assets/images/profile-user-svgrepo-com. (1).svg" alt="profile-sample4" class="profile" />
      <?php 
        }
      else
      ?>
    <img src="../assets/images/<?php echo $user['photo_profil'] ?>" alt="" class="profile" />
    <h2><?php echo $user['prenom'] ?> <?php echo $user['nom'] ?></h2>
  
    <div>
    <p>
      <i class="fas fa-birthday-cake text-2xl mr-2"></i>
      <?php echo $user['date_naissance'] ?>
   </p>
   <p>
   <i class="fas fa-allergies text-2xl mr-2"></i>
      <?php echo $user['allergies'] ?>
   </p>
   <p>
   <i class="fas fa-envelope text-2xl mr-2"></i>
   <?php echo $user['email'] ?>
   </p></div>
    <a href="#" class="follow" id="editButton">Modifier</a>
  </figcaption>
</figure>
</div>


<script>
  const eye = document.getElementById('eye');
  const mdp = document.getElementById('mdp');

  eye.addEventListener('mouseover', () => {

  // Affichez le formulaire en changeant son style "display" en "block"

    mdp.type = "text";
    


  });
  eye.addEventListener('mouseout', () => {

// Affichez le formulaire en changeant son style "display" en "block"

  mdp.type = "password";
  


});


  // Sélectionnez les éléments du DOM

  const editButton = document.getElementById('editButton');

  const card = document.getElementById('card');

  const form1 = document.querySelector('.form');

 

  // Ajoutez un gestionnaire d'événement au bouton "Edit"

  editButton.addEventListener('click', () => {

    // Affichez le formulaire en changeant son style "display" en "block"

    form.style.display = 'block';

    card.style.display = 'none'

  });

  // Sélectionnez le bouton de fermeture

  const closeFormButton = document.getElementById('closeFormButton');
  // Sélectionnez le formulaire

  const form = document.querySelector('.form');
  // Ajoutez un gestionnaire d'événements pour le clic sur le bouton de fermeture

  closeFormButton.addEventListener('click', (e) => {

    e.preventDefault(); // Empêche le lien de se comporter par défaut (redirection)
    // Masquez le formulaire en changeant son style "display" en "none"

    form.style.display = 'none';

    card.style.display = 'block';

  });

</script>
<?php require('footer.php'); ?>
  </body>
</html>