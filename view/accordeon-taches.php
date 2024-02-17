

<?php session_start();
require_once('../model/utilisateur.php');
$user = getUser($_SESSION['id']);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Colok - Tâches ménagères</title>
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
                   @apply text-4xl text-center text-black mb-6 z-30;
                }
                h3{
                   @apply text-3xl text-center mb-6;
                }

                body{
                  @apply text-gray-500;
                }

                html {
                    @apply scroll-smooth scroll-pt-20;
                }

            }

            @layer components {
                .fenetre{
                    @apply text-center pt-2;
                }
                .container-titre{
                    @apply  relative flex flex-col items-center justify-around mb-12;
                }
                .trait{
                    @apply rounded-full bg-[#8ECAE6] h-5 z-20 absolute;
                }

                    
        }
          </style>

</head>

<body>

<?php require('nav.php'); ?>


    <main>

        <div class="fenetre min-h-[calc(100vh-170px)] bg-[url('../assets/images/rrr.svg')] bg-no-repeat bg-left">

            <a href="calendrier.php"><img src="../assets/images/fleche-back.svg" alt="flèche de retour" class="w-10 md:ml-24"></a>


            <div class="container-titre w-40 mx-auto md:w-full">
                <h2>Description des tâches</h2>
                <div class="trait -mt-10 w-48 md:mt-0 md:w-96"></div>
                <div class="trait mt-10 w-48 md:invisible"></div>
            </div>

            <!--#region ACCORDEON  -->

            <div id="accordionExample" class="mb-6 mx-auto px-6 w-full md:w-2/5">
                <div class="rounded-t-lg border border-neutral-200 bg-white">
                    <h2 class="mb-0" id="headingOne">
                        <button
                            class="group font-bold relative flex w-full font-bold items-center rounded-t-[15px] border-0 bg-white px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none"
                            type="button" data-te-collapse-init data-te-collapse-collapsed data-te-target="#collapseOne" aria-expanded="false"
                            aria-controls="collapseOne">
                            Tâches quotidiennes
                            <span
                                class="-mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out 
                                group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#DABFFF] motion-reduce:transition-none">

                                <!-- flèche ouvrante-fermante -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                                    stroke="#8ECAE6" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </span>
                        </button>
                    </h2>
                    <div id="collapseOne" class="!visible hidden" data-te-collapse-item
                        aria-labelledby="headingOne" data-te-parent="#accordionExample">
                        <div class="px-5 py-4 text-left">

                            <div class="liste flex flex-col md:flex-row">
                                <span class="font-bold w-40"> Salon </span>
                                <ul>
                                    <li>Ranger ce qui traîne</li>
                                    <li>Donner un coup au canapé</li>
                                </ul>

                            </div>

                            <div class="liste flex flex-col my-5 md:flex-row">
                                <span class="font-bold w-40"> Cuisine</span>
                                <ul>
                                    <li>Remplir et vider le lave-vaisselle</li>
                                    <li>Couvrir / ranger les aliments</li>
                                    <li>Passer un coup de balais</li>
                                    <li>Nettoyer les plaques de cuisson et plans de travail</li>
                                </ul>

                            </div>

                            <div class="liste flex flex-col my-5 md:flex-row">
                                <span class="font-bold w-40"> Sanitaires</span>
                                <ul>
                                    <li>Nettoyer les WC</li>
                                    <li>Rincer la douche / baignoire</li>
                                    <li>Passer un chiffon sur le lavabo</li>
                                    <li>Aérer la pièce</li>
                                </ul>

                            </div>
                            
                            <div class="liste flex flex-col my-5 md:flex-row">
                                <span class="font-bold w-40">Papiers</span>

                                <ul>
                                    <li>Ramasser le courrier et le mettra dans le bac "à traiter"</li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="border border-t-0 border-neutral-200 bg-white">
                    <h2 class="mb-0" id="headingTwo">
                        <button class="group font-bold relative flex w-full items-center rounded-none border-0 bg-white px-5 py-4 text-left text-base text-neutral-800 
          transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none" type="button"
                            data-te-collapse-init data-te-collapse-collapsed data-te-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                            Tâches hebdomadaires
                            <span class="-mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                                    stroke="#8ECAE6" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </span>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="!visible hidden" data-te-collapse-item aria-labelledby="headingTwo"
                        data-te-parent="#accordionExample">
                        <div class="px-5 py-4 text-left">


                            <div class="liste flex flex-col md:flex-row">
                                <span class="font-bold w-40"> Salon </span>
                                <ul>
                                    <li>Faire les poussières</li>
                                    <li>Passer le balais</li>
                                    <li>Passer la serpillère</li>
                                    <li>Aspirer le tapis</li>
                                </ul>

                            </div>

                            <div class="liste flex flex-col my-5 md:flex-row">
                                <span class="font-bold w-40"> Cuisine</span>
                                <ul>
                                    <li>Nettoyer les portes des placards, frigo, lave vaisselle</li>
                                    <li>Trier le contenu du réfrigérateur</li>
                                    <li>Nettoyer le micro-ondes et le petit électro ménager</li>
                                    <li>Balais + serpillère</li>
                                    <li>Désinfecter la poubelle</li>
                                </ul>

                            </div>

                            <div class="liste flex flex-col my-5 md:flex-row">
                                <span class="font-bold w-40"> Sanitaires</span>
                                <ul>
                                    <li>Laver les serviettes et tapis de bain</li>
                                    <li>Nettoyer les miroirs</li>
                                    <li>Nettoyer la faïence</li>
                                    <li>Passer le balais</li>
                                    <li>Passer la serpillère</li>
                                    <li>Aspirer le tapis</li>
                                    <li>Désinfecter la poubelle</li>
                                </ul>

                            </div>

                            <div class="liste flex flex-col my-5 md:flex-row">
                                <span class="font-bold w-40">Papiers</span>

                                <ul>
                                    <li>Payer les factures</li>
                                    <li>Jeter les pubs</li>
                                    <li>Mettre les papiers dans les boites </li>
                                </ul>
                            </div>

                            <div class="liste flex flex-col my-5 md:flex-row">
                                <span class="font-bold w-40">Autre</span>
                                <ul>
                                    <li>Faire les courses</li>
                                    <li>Arroser les plantes</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <div class=" border border-t-0 border-neutral-200 bg-white">
                    <h2 class="accordion-header mb-0" id="headingThree">
                        <button class="group font-bold relative flex w-full items-center border-0 bg-white px-5 py-4 text-left text-base text-neutral-800 transition 
          [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none" type="button" data-te-collapse-init
                            data-te-collapse-collapsed data-te-target="#collapseThree" aria-expanded="false"
                            aria-controls="collapseThree">
                            Tâches mensuelles
                            <span class="-mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out 
            group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 
            group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                                    stroke="#8ECAE6" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </span>
                        </button>
                    </h2>
                    <div id="collapseThree" class="!visible hidden" data-te-collapse-item aria-labelledby="headingThree"
                        data-te-parent="#accordionExample">
                        <div class="px-5 py-4 text-left">


                            <div class="liste flex flex-col md:flex-row">
                                <span class="font-bold w-40"> Salon</span>
                                <ul>
                                    <li>Faire les vitres</li>
                                    <li>Laver les rideaux</li>
                                    <li>Nettoyer les plinthes</li>
                                    <li>Dépoussiérer les ampoules et aération</li>
                                    <li>Nettoyer les tables et chaises</li>
                                </ul>

                            </div>

                            <div class="liste flex flex-col my-5 md:flex-row">
                                <span class="font-bold w-40"> Cuisine</span>
                                <ul>
                                    <li>Nettoyer le frigo</li>
                                    <li>Nettoyer le four</li>
                                    <li>Faire les vitres</li>
                                    <li>Laver les rideaux</li>
                                    <li>Nettoyer les plinthes </li>
                                    <li>Dépoussiérer les ampoules et aération</li>
                                </ul>

                            </div>

                            <div class="liste flex flex-col my-5 md:flex-row">
                                <span class="font-bold w-40"> Sanitaires</span>
                                <ul>
                                    <li>Faire les vitres</li>
                                    <li>Laver les rideaux</li>
                                    <li>Nettoyer les plinthes</li>
                                    <li>Dépoussiérer les flacons</li>
                                    <li>Nettoyer les portes de placards</li>
                                    <li>Laver le rideau de douche</li>
                                    <li>Dépoussiérer les ampoules et aération</li>
                                </ul>

                            </div>

                            <div class="liste flex flex-col my-5 md:flex-row">
                                <span class="font-bold w-40">Papiers</span>

                                <ul>
                                    <li>Faire les comptes</li>
                                </ul>
                            </div>

                            <div class="liste flex flex-col my-5 md:flex-row">
                                <span class="font-bold w-40">Autre</span>

                                <ul>
                                    <li>Nettoyer le jardin, la terrasse ou le balcon</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <div class=" border border-t-0 border-neutral-200 bg-white">
                    <h2 class="accordion-header mb-0" id="headingFour">
                        <button class="group font-bold relative flex w-full items-center border-0 bg-white px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none" type="button"
                            data-te-collapse-init data-te-collapse-collapsed data-te-target="#collapseFour"
                            aria-expanded="false" aria-controls="collapseFour">
                            Tâches trimestrielles
                            <span class="-mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                                    stroke="#8ECAE6" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </span>
                        </button>
                    </h2>
                    <div id="collapseFour" class="!visible hidden" data-te-collapse-item aria-labelledby="headingFour"
                        data-te-parent="#accordionExample">
                        <div class="px-5 py-4 text-left">

                            <div class="liste flex flex-col md:flex-row">
                                <span class="font-bold w-40"> Salon</span>
                                <ul>
                                    <li>Nettoyer radiateur</li>
                                    <li>Laver les coussins</li>
                                    <li>Nettoyer le canape </li>
                                </ul>

                            </div>

                            <div class="liste flex flex-col my-5 md:flex-row">
                                <span class="font-bold w-40"> Cuisine</span>
                                <ul>
                                    <li>Nettoyer radiateur</li>
                                    <li>Trier les placards de nourriture</li>
                                    <li>Nettoyer l'intérieur des placards</li>
                                    <li>Nettoyer les canalisations</li>
                                </ul>

                            </div>

                            <div class="liste flex flex-col my-5 md:flex-row">
                                <span class="font-bold w-40"> Sanitaires</span>
                                <ul>
                                    <li>Nettoyer radiateur</li>
                                    <li>Nettoyer les canalisations </li>
                                </ul>

                            </div>

                        </div>
                    </div>
                </div>

                <div class=" border border-t-0 border-neutral-200 bg-white ">
                    <h2 class="accordion-header mb-0" id="headingFive">
                        <button class="group font-bold relative flex w-full items-center border-0 bg-white px-5 py-4 text-left text-base text-neutral-800 transition 
      [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none" type="button" data-te-collapse-init
                            data-te-collapse-collapsed data-te-target="#collapseFive" aria-expanded="false"
                            aria-controls="collapseFive">
                            Tâches annuelles
                            <span class="-mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out 
        group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] 
        motion-reduce:transition-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                                    stroke="#8ECAE6" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </span>
                        </button>
                    </h2>
                    <div id="collapseFive" class="!visible hidden" data-te-collapse-item aria-labelledby="headingFive"
                        data-te-parent="#accordionExample">
                        <div class="px-5 py-4 text-left">

                            <div class="liste flex flex-col md:flex-row">
                                <span class="font-bold w-40"> Salon </span>
                                <ul>
                                    <li>Nettoyer derrière les gros meubles</li>
                                    <li>Nettoyer le tapis </li>
                                </ul>

                            </div>

                            <div class="liste flex flex-col my-5 md:flex-row">
                                <span class="font-bold w-40"> Cuisine</span>
                                <ul>
                                    <li>Nettoyer derrière les gros appareils</li>
                                    <li>Degivrer le congélateur </li>
                                </ul>

                            </div>

                            <div class="liste flex flex-col my-5 md:flex-row">
                                <span class="font-bold w-40"> Sanitaires</span>
                                <ul>
                                    <li>Changer rideau de douche</li>
                                    <li>Nettoyer derrière les gros meubles</li>
                                </ul>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <!--#endregion -->


        </div>            
   
    </main>
    

    <!-- lien js vers autre composants https://tailwind-elements.com/docs/standard/getting-started/quick-start/ -->
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>


    <?php require('footer.php'); ?>

</body>

</html>