<?php 
include('../model/notif.php');
$notif = getNotifByUser();
$count = count($notif);



?>


<header class="w-full text-gray-700 bg-white sticky z-50 top-0 drop-shadow-md">
        <div class="w-full text-gray-700 ">
            <div x-data="{ open: false }"
                class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                <div class="p-4 flex flex-row items-center justify-between md:px-12 h-16">
                    <a href="#" class="visible w-1/2 text-lg focus:outline-none focus:shadow-outline md:invisible w-0 md:flex items-center">
                    <img src="../assets/images/logo-colok.svg" alt="logo du site pour aller à l'accueil" class="w-24">
                    </a>

                    <button class="pl-24 md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                            <path x-show="!open" fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                            <path x-show="open" fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>

                <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-around md:flex-row items-center md:mx-auto">
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent text-gray-900 rounded-lg md:mt-0 nav-link" href="../view/idees.php">
                        <i class="fas fa-lightbulb"></i> Boîte à idées
                    </a>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 nav-link" href="calendrier.php">
                        <i class="far fa-calendar-alt"></i> Planning 
                    </a>
                    <a class="h-0 invisible md:visible w-32 flex items-center" href="home-connecte.php">
                    <img src="../assets/images/logo-colok.svg"  alt="logo du site pour aller à l'accueil" class="w-24 m-auto h-24 sm:w-auto sm:m-0 sm:h-auto">
                    </a>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 nav-link" href="mesTaches.php">
                    <i class="fas fa-tasks"></i> Mes Tâches
                    </a>
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 nav-link" href="../view/forms.php">
    <i class="fas fa-home"></i> Profil Maison
</a> 
<div class="flex flex-row">
        <div @click.away="open = false" class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="flex flex-row items-center w-18 px-2 pb-2 pt-0 mt-0 text-sm font-semibold mr-[35px] ml-[35px] text-left bg-transparent rounded-lg md:w-auto md:inline md:mt-0 md:ml-4">
                <?php if($user['photo_profil'] == "") { ?>
                    <img src="../assets/images/profile-user-svgrepo-com. (1).svg" alt="Image de profil par défaut" class="w-[62px] mt-2  rounded-full h-[4rem] max-w-full mx-auto">
                <?php } else { ?>
                    <img src="../assets/images/<?php echo $user['photo_profil']; ?>" alt="Image de profil" class="w-[62px] mt-2  rounded-full h-[4rem] max-w-full mx-auto">
                <?php } ?>
                        </button>

                        <div x-show="open" x-transition:enter="transition ease-out duration-100"

                            x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"

                            x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"

                            x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-50 right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-40">

                            <div class="px-2 py-2 bg-white rounded-md shadow" >
                           <p> <?php  if(isset($_SESSION['id'])){ echo "Bienvenu  ".$user['prenom'] ;}  ?></p>

                                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 nav-link" href="profile.php">
                                 
                                    <i class="fas fa-user"></i> Mon Profil

                                    </a>

                                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 nav-link" href="../view/home.php">

                                    <i class="fas fa-power-off"></i> Déconnexion

                                    </a>
                            </div>
                            </div>
                            
                        </div>
                        <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <a href="notifications.php">    
                        <button>
                                
                                <span class="[&>svg]:w-6 mr-2 px-4 ">
                            <img src="../assets/images/icons8-rappels-de-rendez-vous.gif" alt="Icône de rappels de rendez-vous" class="h-8 w-8 mb-8 ml-4">
                            </span>
                            <!-- Compteur de notifications -->
                            <?php if($count == 0){

                            }
                            else{?>
                                <span class=" absolute bottom-20 rounded-full bg-red-500 px-2 text-white"><?php echo $count ?></span>

                           <?php } ?>
                            

                        
                         </button>
                                    </a> 
                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
 
                            x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"

                            x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"

                            x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-50 right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-40">

                            <div class="px-2 py-2 bg-white rounded-md shadow ">

<!--                                    
                                    <div>
                                        <div class="notifi-item ">
                                        <img src="../assets/images/profil-nav.svg" style="width: 25px;" alt="img">
                                            
                                        </div>
                                        <div class="notifi-item ">
                                        <img src="../assets/images/profil-nav.svg" style="width: 25px;" alt="img">
                                          
                                        </div>
                                    </div> -->
                                        
                                    
                                        
                               
                            </div>
                            </div>
                            
                        </div>
                       
               </div>
                 
               
              
                            
                </nav>
            </div>
        </div>
    </header>