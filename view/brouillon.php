<?php 
    session_start();
    include('../model/taches.php');
    $taches = listeTache();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table des tâches</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin: 20px 0;
    }

    th, td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tbody tr:hover {
        background-color: #ddd;
    }
</style>

<body>
    
    <table>
        <thead>
            <tr>
                <th>Nom de la tâche</th>
                <th>Date de la tâche</th>
                <th>Description</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($taches as $tache){ ?>
                <tr>
                    <td><?php echo $tache['nom'] ?></td>
                    <td><?php echo $tache['creat_date'] ?></td>
                    <td><?php echo $tache['description'] ?></td>
                    <td><?php echo $tache['statut'] ?></td>

                    <td class="text-left">
            
               <div class="btn-group">
                   
               <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal<?php echo $tache['id'] ?>">View</button>
                   <a href="../controller/tachesControlleur.php?id=<?php echo $tache['id'] ;?>"><button class="btn btn-danger">🗑️</button></a>
               </div>
               
               
               
           </td>
                </tr>
                  <!-- Event Details Modal -->
                  <div id="myModal<?php echo $tache['id'] ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Details</h4>
                    </div>
                    <div class="modal-body">
                         <form action="">
                            <h1><?php echo $tache['nom'] ?></h1>
                            <p><?php echo $tache['description'] ?></p>
                            <select name="statut" id="" selected="<?php echo $tache['statut'] ?>">
                                <option value="en cours">En cours</option>
                                <option value="terminé">Terminé</option>
                                <option value="en suspens">En suspens</option>

                            </select>

                         </form>
                        
                    </div>
                </div>
            </div>
        </div>
    <!-- Event Details Modal -->
            <?php } ?>
        </tbody>
    </table>