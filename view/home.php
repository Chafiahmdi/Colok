<!DOCTYPE html>
<html lang="fr">
<head>

    <title>Colok - Accueil</title>
    <?php require('headC.php');?>


    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                clifford: '#da373d',
              }
            }
          }
        }
      </script>
        <style type="text/tailwindcss">
            @layer utilities {
              .content-auto {
                content-visibility: auto;
              }
            }
            @layer base {

                h2{
                   @apply text-4xl text-center text-[#1a375d] mb-6;
                }

                body{
                  @apply text-[#1a375d] tracking-wide leading-loose min-w-fit	;
                }
               
                html {
                    @apply scroll-smooth scroll-pt-20;
                }
                button  {
                    @apply text-[#001e25] rounded-full h-8 w-36 font-medium z-10  bg-[#8ECAE6] hover:bg-[#001e25] hover:text-white;
                }

            }

            @layer components {
                .fenetre{
                    @apply text-center pt-20 ;
                }
                .container-titre{
                    @apply relative flex flex-col items-center justify-around mb-12;
                }
                .trait{
                    @apply rounded-full bg-[#8ECAE6] h-5 -z-20 absolute;
                }

                .app-short-desc{
                    @apply shadow-xl;
                }
                .app-desc{
                    @apply italic;
                }

        }
          </style>

</head>
<body> 
<header class="sticky top-0 z-50 bg-white drop-shadow-md">
    <nav>
      <ul>
        <li><a href="home.php"></a></li>
        <li>
          <a href="index.html">
            <img src="../assets/images/logo-colok.svg" alt="logo du site pour aller à l'accueil" class="w-32 m-auto h-20">
          </a>
        </li>
      </ul>
    </nav>
  </header>

    <main>

<!--#region ACCUEIL  -->
        <div class="container fenetre relative bg-[#96cde3] min-w-full h-[90vh]">  

      <!-- birds -->  
        <div class="test w-full absolute"> 
          <div class="bird-container bird-container--one">
            <div class="bird bird--one"></div>
          </div>
          <div class="bird-container bird-container--two">
            <div class="bird bird--two"></div>
          </div>          
          <div class="bird-container bird-container--three">
            <div class="bird bird--three"></div>
          </div>
          <div class="bird-container bird-container--four">
            <div class="bird bird--four"></div>
          </div>  
    </div>
    <!-- birds -->
          
            <figure>
            </figure>

            <img class=" mb-6 ml-auto mr-auto w-80 md:w-96" src="../assets/images/logo-colok.svg" alt="logo"> 
            <p class="mx-auto w-[11.2rem] text-black relative md:w-full mt-6 mb-12"> Des tâches partagées, une colocation équilibrée </p>
            <div class="illust-propos flex flex-col h-24 items-center justify-between mt-28	md:flex-row md:justify-center">
                
                <button  class="bg-[#001e25] text-white md:ml-3"><a href="signIn.php">Lancez-vous!</a></button>
            </div> 
            <div   class=" absolute inset-x-0 bottom-0" ><img src="../assets/images/maisons.svg" alt="image de maisons"></div>           
        </div> 
<!--#endregion -->        

<!--#region A PROPOS  -->
  
        <div class="fenetre h-[150vh] bg-[#e3f6fd3d ] md:h-[90vh]">
          
          <div class="container-titre z-40">
            <h2>A propos</h2>
            <div class="trait w-40"></div>
          </div>  
              <div class="flex flex-col items-center md:flex-row justify-around w-10/12	mx-auto">
                <div class="anim-right rounded-t-full rounded-b-lg shadow-lg bg-[#E1F6FD] md:w-1/3 mx-auto"><img src="../assets/images/about_illust.gif" alt="" class="rounded-full"> </div>


                <p  class="p-propos text-justify w-5/6 rounded-xl mt-16 px-6 md:w-1/3 mx-auto anim-left" id="animated-element">Chez Colok, nous savons que vivre en colocation peut être à la fois amusant et gratifiant, mais aussi stressant et difficile à gérer. C'est pourquoi nous avons créé cette plateforme de gestion de colocation pour faciliter la vie en communauté.

                    Notre mission est de créer un environnement harmonieux où les colocataires peuvent vivre confortablement et en paix. Nous croyons que la communication et la collaboration sont essentielles pour une colocation réussie, c'est pourquoi notre plateforme offre des fonctionnalités de gestion des tâches ménagères, de la boîte à idée et de calendrier des événements.               
                    Nous sommes une équipe de passionnés dévoués à rendre la vie en colocation plus agréable et plus facile. Nous travaillons dur pour offrir à nos utilisateurs une expérience de gestion de colocation sans stress et sans tracas.               
                    Chez Colok, nous sommes convaincus que la vie en colocation peut être une expérience enrichissante et positive, et nous sommes fiers d'aider nos utilisateurs à en profiter pleinement.</p>      
              </div>      
        </div>
<!--#endregion -->

<!--#region AVIS  -->

  <div class="fenetre  bg-[url('../assets/images/vaguebleu.svg')] bg-no-repeat bg-cover	h-[120vh] md:h-[90vh]">
    
          <div class="container-titre relative flex flex-col items-center justify-around z-20 mt-[9rem]">
            <h2>Avis</h2>
            <div class="trait w-20"></div>
          </div>    
           
  <div class="taille-carrousel "> 
    <div id="ProductPromotions" class="promotions"> </div>
        <div id="ServicesPromotions" class="promotions">
            <ul class="PromotionsList">
              <li class="active" data-slide-value="1">
                <span class="app-icon">
                  <img src="../assets/images/ph-avis2.jpg" alt="photo de profil d'une personne"/>
                </span>
                <span class="app-short-desc">
                  <span class="app-title">
                    <span class="title"> Sophie, 22 ans :</span>
                  </span>
                  <span class="app-desc">
                  "Colok simplifie vraiment la vie en colocation. Les tâches préassignées sont un énorme avantage. On sait toujours qui est en charge de quoi, ce qui évite les malentendus. C'est un outil génial pour rendre la vie en communauté plus agréable."
                  </span>
                </span>
              </li>
              <li data-slide-value="2">
                <span class="app-icon">
                  <img src="../assets/images/ph-avis3.jpg" alt="photo de profil d'une personne"/>
                </span>
                <span class="app-short-desc">
                  <span class="app-title">
                    <span class="title"> Maxime, 26 ans : </span>
                  </span>
                  <span class="app-desc">
                  "Colok est l'outil idéal pour vivre en colocation sans soucis. Les tâches ménagères sont réparties équitablement, et tout est bien 
                  organisé grâce au calendrier des événements. J'aime cette plateforme, elle nous permet de vivre en harmonie."
                  </span>
                </span>
              </li>
              <li data-slide-value="3">
                <span class="app-icon">
                  <img src="../assets/images/ph-avis1.png" alt="photo de profil d'une personne"/>
                </span>
                <span class="app-short-desc">
                  <span class="app-title">
                    <span class="title"> Kevin, 30 ans : </span>
                  </span>
                  <span class="app-desc">
                  "Enfin, une solution qui prend en charge la gestion des tâches en colocation ! Colok attribue automatiquement les tâches, ce qui rend tout tellement plus équitable. J'apprécie le temps que cela nous fait gagner. Le calendrier des événements est également pratique pour planifier nos soirées."
                  </span>
                </span>
              </li>
            </ul>

            <div class="controls">
              <span class="dot active" data-slide="1"></span>
              <span class="dot" data-slide="2"></span>
              <span class="dot" data-slide="3"></span>
            </div>
        </div>
    </div>
  </div>
<!--#endregion -->

<!--#region Application  -->

        <div class="fenetre">
          <div class="container-titre relative flex flex-col items-center justify-around">
              <h2>Application</h2>
              <div class="trait w-48"></div>
          </div>  
              <div class="flex flex-col items-center mx-auto mb-8 md:flex-row-reverse w-[70vw]">
   

                    <div class="w-5/6 mb-8 md:px-6">
                        <img src="../assets/images/pub.svg" alt="image de l'application"> 
                    </div>

                    <div class="w-5/6 md:px-20">
                        <div class="text-justify mb-8 ">
                          <img class="mb-2 logo-app w-40" src="../assets/images/logo-colok.svg" alt="logo">
                          <span>Prêt à simplifier la vie en colocation ? Découvrez Colok, votre allié pour une colocation harmonieuse et sans tracas !
                          Finis les malentendus sur les tâches ménagères, les courses oubliées, et les calendriers d'événements chaotiques. Avec Colok, tout est organisé pour vous. Les tâches sont préassignées, les achats sont planifiés, et les événements sont coordonnés en un seul endroit.                 
                          Rejoignez notre communauté de colocataires satisfaits et vivez une colocation plus fluide et agréable. Téléchargez l'application dès maintenant et découvrez à quel point la vie en communauté peut être simple avec Colok.
                          </span>
                        </div>

                        <div class="flex flex-col items-center md:flex-row">
                            <div class="flex flex-col w-1/2 items-center mb-6 md:mb-0">
                                <button class="hover:bg-[#001e25] text-[#001e25] ml-3">Télécharger sur</button>
                                <span class="font-bold justify-end">App Store</span>
                            </div>
                            <div class="flex flex-col w-1/2 items-center">
                                <button class="hover:bg-[#001e25] text-[#001e25] ml-3">Télécharger sur</button>
                                <span class="font-bold">Google Play</span>
                            </div>
                        </div>
                    </div>

              </div>           
        </div>

<!--#endregion -->  

    </main>

    <?php require('footer.php'); ?>
     
</body>
</html>