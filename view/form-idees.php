

<?php session_start();
require_once('../model/utilisateur.php');
$user = getUser($_SESSION['id']);
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../sass/styles/nav.scss">
<script src="../js/bell.js"></script>


<head>
    <title>Colok - Boîte à idées</title>
    <?php require('headC.php'); ?>


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
            h2 {
                @apply text-4xl text-center text-[#1a375d] mb-6 z-30;
            }

            h3 {
                @apply text-3xl text-center mb-6;
            }

            footer {
                @apply h-[2vh];
            }

            body {
                @apply text-[#1a375d]
            }
           

        }

        @layer components {
            .fenetre {
                @apply  text-center pt-2 min-h-[100.5vh] md:h-[85.5vh];
            }

            .container-titre {
                @apply relative flex flex-col items-center justify-around mb-12;
            }

            .trait {
                @apply rounded-full bg-[#8ECAE6] h-5 z-20 absolute;
            }
        }
    </style>

</head>

<body>

<header class="w-full text-gray-700 bg-white sticky z-50 top-0 drop-shadow-md">
     <?php include("nav.php")?>
     
   </header>

    <main>


        
        <div class="fenetre relative">

            <a href="../view/home-connecte.php"><img src="../assets/images/fleche-back.svg" alt="flèche de retour" class="w-10 md:ml-24"></a>


                <div class="container-titre">
                    <h2>Boîte à idées</h2>
                    <div class="trait w-52"></div>
                </div>

                <div class="flex flex-col md:flex-row-reverse mx-auto w-4/5">
                        <img src="../assets/images/illust-idees.gif" alt="image illustrant une idée">
                        <form action="../controller/ideeController.php" method="POST" class="w-72 m-auto md:w-2/5">

                            <div class="flex flex-col w-full">
                                <label for="titre" class="label">
                                
                                    <span class="ml-2">   <i class="fa fa-lightbulb mr-2"></i>Titre de l'idée</span>
                                </label>
                                <input type="text" id="titre" name="titre" placeholder="Nom de mon idée" class="input input-bordered mb-3">
                            
                                <label for="description" class="label">
                                
                                    <span class="ml-2"> <i class="fa fa-comment mr-2"></i>Description de l'idée</span>
                                </label>
                                <textarea id="description" name="description" placeholder="Je vous propose" class="textarea textarea-bordered textarea-lg mb-8"></textarea>
                            
                                
                            
                                <button type="submit" class="button h-9 w-32 rounded-full self-end bg-[#8ECAE6] text-[#001e25] hover:bg-[#001e25] text-white">
                                    <i class="fa fa-paper-plane mr-2"></i>
                                    Proposer
                                </button>
                            </div>
                        </form>
                </div>
        
        </div>
    </main>

    <?php require('footer.php'); ?>

    <!-- lien js vers autre composants https://tailwind-elements.com/docs/standard/getting-started/quick-start/ -->
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>

</body>

</html>
