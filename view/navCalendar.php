<style>
  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }

  body {
    font-family: sans-serif;
  }

  header {
    background-color: #333; /* Fond de la barre de navigation */
  }

  nav {
    display: flex;
    justify-content:center;
    align-items: center;
    height: 60px;
    padding: 0 15px; /* Réduction de la marge intérieure pour rapprocher les éléments */
  }

  .icon {
    cursor: pointer;
    margin-right: 10px; /* Réduction de la marge à droite */
    line-height: 60px;
  }

  .icon span {
    background: #f00;
    padding: 4px;
    border-radius: 50%;
    color: #fff;
    vertical-align: top;
    margin-left: -29px; /* Ajustement de la marge à gauche */
  }

  .icon img {
    display: inline-block;
    width: 40px;
    margin-top: 20px;
	
  }

  .icon:hover {
    opacity: .7;
  }

  .logo {
    flex: 1;
    color: #eee;
    font-size: 20px;
    font-family: monospace;
  }

  /* Vos autres styles restent inchangés */
</style>

<?php
include('../model/notif.php');
$notif = getNotifByUser();
$count = count($notif);
?>

<header>
  <nav style="height: 7rem;">
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <ul>
      <li>
        <a href="../view/idees.php"><i class="fas fa-lightbulb"></i>Boîte à idées</a>
      </li>
      <li>
        <a href="calendrier.php"><i class="far fa-calendar-alt"></i>Planning</a>
      </li>
    </ul>
    <div class="nav-items">
      <img src="../assets/images/logo-colok.svg" alt="" >
    </div>
    <ul>
      <li>
        <a href="../view/mesTaches.php"><i class="fas fa-tasks"></i>Mes Tâches</a>
      </li>
      <li>
        <a href="../view/forms.php"><i class="fas fa-home"></i>Profil Maison</a>
      </li>
    </ul>
    <div class="nav-img ">
      <?php
      if ($user['photo_profil'] == "") { ?>
        <img src="../assets/images/profile-user-svgrepo-com (1).svg" style=" height: 58px;  ">
      <?php } else { ?>
        <img src="../assets/images/<?php echo $user['photo_profil']; ?>" alt="Image de profil">
      <?php } ?>
    </div>
    <div class="icon" onclick="toggleNotifi()">
      <a href="notifications.php">
        <img src="../assets/images/icons8-rappels-de-rendez-vous.gif" alt="" style="margin-bottom: 3rem; margin: right 15px; ">
        <span><?php echo $count ?></span>
      </a>
    </div>
  </nav>
</header>
