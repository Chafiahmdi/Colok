

<?php
session_start();
include('../model/taches.php');
include('../model/utilisateur.php');



$taches = listeTache();
$user = getUser($_SESSION['id']);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require('headC.php');?>

    <link rel="stylesheet" href="../build/styles/notif.css">
    <!-- <script src="../js/notif.js" defer></script> -->

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
                   @apply text-4xl text-center text-black mb-6;
                }

                body{
                  @apply text-[#001e25] tracking-wide min-w-fit	;
                } 
               
                html {
                    @apply scroll-smooth scroll-pt-20;
                }
            

            }

            @layer components {
                .fenetre{
                    @apply text-center pt-10 ;
                }
                .container-titre{
                    @apply relative flex flex-col items-center justify-around mb-12;
                }
                .trait{
                    @apply rounded-full bg-[#8ECAE6] h-5 -z-20 absolute;
                }

       

        } 
          </style>

</head>
<body>
<?php require('nav.php'); ?>

<main class="mb-60">


<div class="fenetre min-h-[100vh] bg-[#e3f6fd3d ] md:min-h-[30vh] ">
          
          <div class="container-titre z-40 mb-5">
            <h2>Notifications</h2>
            <div class="trait w-56"></div>
          </div>  
    <!-- alerte -->

    <?php foreach($notif as $row) { ?> 
        <div class="alert w-96 mx-auto mb-12 shadow-xl bg-white md:w-2/3">
            <div class="ml-80 md:ml-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#e3f6fd3d" viewBox="0 0 24 24" class="stroke-info shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <span> Vous avez une tâche en attente : <span class="text-red-400"><?php echo $row['title'] ?></span>. C'est le moment parfait pour la terminer ! Date de fin : <span class="text-blue-900"><?php echo $row['end_datetime']  ?></span> 😊</span>
            <div>
                <button class="text-[#001e25] rounded-full h-8 w-36 font-medium z-10  bg-[#8ECAE6] hover:bg-[#001e25] hover:text-white"><a href="../controller/tachesControlleur.php?statutId=<?php echo $row['notif_id'] ?>">Marquer comme lu</a></button>
            </div>
        </div>  
    <?php } ?>


</main>
        <?php require('footer.php'); ?>



</body>
</html>