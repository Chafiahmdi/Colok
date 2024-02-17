<!DOCTYPE html>
<html lang="fr" class="dark">
  <head>

    <title>Profil utilisateur</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="../js/app.js" defer></script>
    <link rel="stylesheet" href="../build/styles/profile-user.css" />
    <link rel="stylesheet" href="../build/styles/nav.css" />


  </head>
  <body>
    <header class="w-full text-gray-700 bg-white sticky z-50 top-0 drop-shadow-md">
       <?php include("nav.php")?>
     
    </header>
    <main class="">
      <h1 class="page-title">Mon profil</h1>
      <div class="profile-picture">  
    <a href="#imageFile" onclick="poutpout()" class="profile-link">
        <img src="../assets/images/" id="blah" alt=""> 
        <i id="mon-icon" class="fas fa-camera"></i>

    </a>
</div>
      <div class="profile">
        <p>Information personnelle</p>
        
        <form class="profile-form" action="POST">
       
                                   
                                    <input type="file" id="imageFile" name="fileToUpload" accept="image/*" style="display: none;">
                               
          <div class="name-container">
            <div class="input-container">
              <label htmlFor="last-name">Nom <span>*</span> </label>
              <input
                type="text"
                class="form-input"
                id="last-name"
                autocomplete="off"
                required
              />
            </div>
            <div class="input-container">
              <label htmlFor="last-name">Prénom <span>*</span> </label>
              <input
                type="text"
                class="form-input"
                id="first-name"
                autocomplete="off"
                required
              />
            </div>
          </div>
          <div class="input-container">
            <label htmlFor="email">Adresse mail<span>*</span> </label>
            <input
              type="email"
              class="form-input"
              autocomplete="off"
              id="email"
              required
            />
          </div>
          <div class="input-container">
            <label htmlFor="job">Profession</label>
            <input
              type="text"
              class="form-input"
              autocomplete="off"
              id="job"
              required
            />
          </div>
          <div class="input-container">
            <label htmlFor="schedule">Horaire<span>*</span> </label>
            <input
              type="text"
              class="form-input"
              autocomplete="off"
              id="schedule"
              required
            />
          </div>
          <div class="input-container">
            <label htmlFor="allergy">Allergies</label>
            <input
              type="text"
              class="form-input"
              autocomplete="off"
              id="allergy"
              required
            />
          </div>
          <div class="input-container">
            <label htmlFor="animals">Animaux</label>
            <input
              type="text"
              class="form-input"
              autocomplete="off"
              id="animals"
              required
            />
          </div>
          <div class="input-container">
            <label htmlFor="event">Evènements à venir?</label>
            <input
              type="text"
              class="form-input"
              autocomplete="off"
              id="event"
              required
            />
          </div>
          <button class="form-btn">Valider</button>
        </form>
      </div>
    </main>
    <!-- <div class="house">
      <img src="../assets/images/house_footer.svg" alt="">
  </div> -->
    <footer></footer>
  </body>
</html>
