<?php session_start(); 
require_once("../model/utilisateur.php");
$user = getUser($_SESSION["id"]);

?>
<!DOCTYPE html>
<html lang="fr">
<head>

    <title>Colok - Accueil</title>
    <?php require('headC.php');?>
    <link rel="stylesheet" href="../build/styles/cards.css">

  
    

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
                h3{
                   @apply text-3xl text-center mb-6 ;
                }

                body{
                  @apply text-[#001e25] tracking-wide  min-w-fit;
                }
               
                html {
                    @apply scroll-smooth scroll-pt-20;
                }
                /* button  {
                    @apply text-[#001e25] ml-3 rounded-full h-8 w-36 font-medium z-10  ;
                } */
              
              

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

                .card{
                    @apply md:m-4;
                }

                .face{
                    @apply px-8 rounded-lg h-64 w-full text-justify px-4 pb-2 pt-8;
                }

                .icon-didacticiel{
                    @apply w-24 h-24 m-auto mb-6;
                }
                .app-desc{
                    @apply italic leading-loose;
                }
                
                
        }
          </style>

</head>
<body> 
<?php require('nav.php'); ?>

<main class="md:h-[220rem]">

<!--#region ACCUEIL  -->
        <div class="container fenetre relative bg-[#96cde3] min-w-full h-[220vh] md:h-[104vh]">  

       <!--birds-->

            <figure>
            </figure>

           <img class=" mb-6 ml-auto mr-auto w-80 md:w-96" src="../assets/images/logo-colok.svg" alt="logo">  
              <!--#region CARTES  -->
  <div class="container-cards">
    <div class="container2 h-auto w-auto flex flex-col justify-evenly items-center  md:flex-row w-1/2 flex-wrap	">
    <!--box-shadow: 0 16px 22px -17px #03153B;-->

     <div class="card">
    <a href="../view/profile.php">
        <div class="face face1">
            <div class="content">
                <div class="icon">
                    <img src="../assets/images/profil.svg" alt="icone du profil" class="icon-didacticiel">
                </div>
            </div>
        </div>
        <div class="face face2">
            <div class="content text-[#1a375d]">
                <h3>Profil colocataire</h3>
                <p>Découvrez vos futurs colocataires. Créez un profil unique pour mieux vous connaître et trouver la colocation parfaite.</p>
            </div>
        </div>
    </a>
</div>

<div class="card">
    <a href="../view/calendrier.php">
        <div class="face face1">
            <div class content="">
                <div class="icon">
                    <img src="../assets/images/calendar.svg" alt="icone d'un calendrier" class="icon-didacticiel">
                </div>
            </div>
        </div>
        <div class="face face2">
            <div class="content text-[#1a375d]">
                <h3>Planning des tâches</h3>
                <p>Restez organisé et équitable. Planifiez et suivez les tâches ménagères et les responsabilités de manière transparente.</p>
            </div>
        </div>
    </a>
</div>

<div class="card">
    <a href="notifications.php">
        <div class="face face1">
            <div class="content">
                <div class="icon">
                    <img src="../assets/images/notif.svg" alt="icone de notifications" class="icon-didacticiel">
                </div>
            </div>
        </div>
        <div class="face face2">
            <div class="content text-[#1a375d]">
                <h3>Notifications</h3>
                <p>Restez informé et connecté. Recevez des notifications en temps réel sur les événements importants, les rappels de tâches et les mises à jour essentielles pour une colocation harmonieuse.</p>
            </div>
        </div>
    </a>
</div>

<div class="card">
    <a href="../view/form-idees.php">
        <div class="face face1">
            <div class="content text-[#1a375d]">
                <div class="icon">
                    <img src="../assets/images/box.svg" alt="icone d'une boite" class="icon-didacticiel">
                </div>
            </div>
        </div>
        <div class="face face2">
            <div class="content text-[#1a375d]">
                <h3>Boîte à idées</h3>
                <p>Partagez vos idées, améliorez votre colocation. Proposez des suggestions et contribuez à rendre votre maison encore meilleure.</p>
            </div>
        </div>
    </a>
</div>

      </div>

   
 <!--#endregion -->

            <div   class=" absolute inset-x-0 bottom-0" ><img src="../assets/images/maisons.svg" alt="image de maisons"></div>           
        </div> 
<!--#endregion -->        

<!--#region A PROPOS  -->
  
        <div class="fenetre h-[150vh] mt-[7rem] md:h-[86vh] md:mt-[20rem]">
          
          <div class="container-titre z-40">
            <h2>A propos</h2>
            <div class="trait w-40"></div>
          </div>  
          <div class="flex flex-col items-center md:flex-row justify-around w-10/12	mx-auto">
            <div class="anim-right rounded-t-full rounded-b-lg shadow-lg bg-[#E1F6FD] md:w-1/3 mx-auto "><img src="../assets/images/about_illust.gif" alt="illustration d'un salon" class="rounded-full"> 
          </div>

            <p  class="p-propos text-justify leading-loose w-5/6 rounded-xl mt-16 px-6 md:w-1/3 mx-auto anim-left" id="animated-element">Chez Colok, nous savons que vivre en colocation peut être à la fois amusant et gratifiant, mais aussi stressant et difficile à gérer. C'est pourquoi nous avons créé cette plateforme de gestion de colocation pour faciliter la vie en communauté.

                Notre mission est de créer un environnement harmonieux où les colocataires peuvent vivre confortablement et en paix. Nous croyons que la communication et la collaboration sont essentielles pour une colocation réussie, c'est pourquoi notre plateforme offre des fonctionnalités de gestion des tâches ménagères, de la boîte à idée et de calendrier des événements.               
                Nous sommes une équipe de passionnés dévoués à rendre la vie en colocation plus agréable et plus facile. Nous travaillons dur pour offrir à nos utilisateurs une expérience de gestion de colocation sans stress et sans tracas.               
                Chez Colok, nous sommes convaincus que la vie en colocation peut être une expérience enrichissante et positive, et nous sommes fiers d'aider nos utilisateurs à en profiter pleinement.</p>      
          
            </div>      
        </div>
<!--#endregion -->

<!--#region AVIS  -->

  <div class="fenetre bg-[url('../assets/images/vaguebleu.svg')] bg-no-repeat bg-cover	h-[120vh] md:h-[90vh] ">
    <!-- <img src="../assets/images/vague-blache.svg" alt="" class="absolute -mt-[5rem]"> -->
    
          <div class="container-titre relative flex flex-col items-center justify-around z-20 mt-[9rem]">
            <h2>Avis</h2>
            <div class="trait w-20"></div>
          </div>    
          
  <div class="taille-carrousel "> 
    <div id="ProductPromotions" class="promotions"> </div>
        <div id="ServicesPromotions" class="promotions">
            <ul class="PromotionsList ">
              <li class="active " data-slide-value="1">
                <span class="app-icon">
                  <img src="../assets/images/ph-avis2.jpg" alt="photo d'un utilisateur"/>
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
                  <img src="../assets/images/ph-avis3.jpg" alt="photo d'un utilisateur"/>
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
                  <img src="../assets/images/ph-avis1.png" alt="photo d'un utilisateur"/>
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
        <img src="../assets/images/vague-bleu.svg" alt="" class="absolute -mt-[5rem]">

          <div class="container-titre relative flex flex-col items-center justify-around z-20 mt-[0rem]">
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
                          <span class="leading-loose">Prêt à simplifier la vie en colocation ? Découvrez Colok, votre allié pour une colocation harmonieuse et sans tracas !
                          Finis les malentendus sur les tâches ménagères, les courses oubliées, et les calendriers d'événements chaotiques. Avec Colok, tout est organisé pour vous. Les tâches sont préassignées, les achats sont planifiés, et les événements sont coordonnés en un seul endroit.                 
                          Rejoignez notre communauté de colocataires satisfaits et vivez une colocation plus fluide et agréable. Téléchargez l'application dès maintenant et découvrez à quel point la vie en communauté peut être simple avec Colok.
                          </span>
                        </div>

                        <div class="flex flex-col items-center md:flex-row">
                            <div class="flex flex-col w-1/2 items-center mb-6 md:mb-0">
                                <button class="bg-[#8ECAE6] hover:bg-[#001e25] hover:text-white  text-[#001e25] ml-3 rounded-full h-8 w-36 font-medium z-10 ">Télécharger sur</button>
                                <span class="font-bold justify-end">App Store</span>
                            </div>
                            <div class="flex flex-col w-1/2 items-center">
                                <button class="bg-[#8ECAE6] hover:bg-[#001e25] hover:text-white  text-[#001e25] ml-3 rounded-full h-8 w-36 font-medium z-10  ">Télécharger sur</button>
                                <span class="font-bold">Google Play</span>
                            </div>
                        </div>
                    </div>

              </div>           
        </div>

<!--#endregion -->  
  <?php require('footer.php'); ?>
</main>

  
    <script src="../js/bell.js"></script>
</body>
</html>