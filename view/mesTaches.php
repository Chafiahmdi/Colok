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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Table des tâches</title>
    <!-- le headC empeche ma modal d'apparaitre CHERCHER SOLUTION -->
    <link rel="stylesheet" type="text/css" href="../build/styles/nav.css">
    <link rel="stylesheet" href="../build/styles/mesTaches.css">
    <link rel="stylesheet" href="../build/styles/footer.css">
    <!-- liens pour nav -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" defer></script>

</head>

<body>
<?php require('nav.php'); ?>

    <div class="container-titre">
        <h2>Mes tâches</h2>
        <div class="trait"></div>
    </div> 

    <div class=" table-users">
   

        <table cellspacing="0">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Début</th>
                    <th>Fin</th>
                    <th>Type</th>
                    <th>Type de tâche</th> 
                    <th>Statut</th>
                    <th width="230">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($taches as $tache) { ?>

                    <tr>
                        <td><?php echo $tache['title'] ?></td>
                        <td><?php echo $tache['description'] ?></td>
                        <td><?php echo $tache['start_datetime'] ?></td>
                        <td><?php echo $tache['end_datetime'] ?></td>
                        <td><?php echo $tache['type'] ?></td>
                        <td><?php echo $tache['type_tache'] ?></td>
                        <td><?php echo $tache['statut'] ?></td>
                        <td>
                            <div class="btn-group ">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal<?php echo $tache['id'] ?>">
                                    <div class="container-modal">
                                        <div>
                                            <a class="btn p-3" href="#open-modal">Voir</a>
                                        </div>
                                    </div>
                                </button>
                                <a href="../controller/tachesControlleur.php?id=<?php echo $tache['id']; ?>">🗑️</a>
                            </div>
                        </td>
                    </tr>
                                <div id="open-modal" class="modal-window">
                                    <div id="myModal<?php echo $tache['id'] ?>" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <a href="#" title="Close" class="modal-close">Fermer</a>
                                            <h1><?php echo $tache['title'] ?></h1>
                                            <div><?php echo $tache['description'] ?></div>                       

                                            <div class="modal-body">
                                                <form action="../controller/tachesControlleur.php" method="POST">
                                                    <input type="hidden"  name="setStatut">
                                                    <input type="hidden" name="id" value="<?php echo $tache['id'] ?>">
                                                    <select name="statut" id="" selected="<?php echo $tache['statut'] ?>">
                                                        <option value="en cours">En cours</option>
                                                        <option value="Terminé">Terminé</option>
                                                        <option value="en suspens">En suspens</option>
                                                    </select>
                                          
                                                    <button class="btn absolute right-8 bottom--8 " >Valider</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>   


                <?php } ?>
            </tbody>
        </table>
    </div>


    <?php require('footer.php'); ?>


</body>

</html>