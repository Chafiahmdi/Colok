
<?php session_start(); 
require_once("../model/utilisateur.php");
$user = getUser($_SESSION["id"]);

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Notification</title>
	<link rel="stylesheet" href="../build/styles/bell.css">
    <?php include("nav.php")?>
    <?php include("headC.php")?>

</head>


<body>
	<nav>
	
	
		<div class="notifi-box" id="box">
			<h2>Notifications <span>17</span></h2>
			<div class="notifi-item">
				<img src="../assets/images/profil-nav.svg" alt="img">
				<div class="text">
				   <h4>Elias Abdurrahman</h4>
				   <p>@lorem ipsum dolor sit amet</p>
			    </div> 
			</div>

			

			<div class="notifi-item">
				<img src="../assets/images/profil-nav.svg" alt="img">
				<div class="text">
				   <h4>Emad Ali</h4>
				   <p>@lorem ipsum dolor sit amet</p>
			    </div> 
			</div>

			<div class="notifi-item">
				<img src="../assets/images/profil-nav.svg" alt="img">
				<div class="text">
				   <h4>Ekram Abu </h4>
				   <p>@lorem ipsum dolor sit amet</p>
			    </div> 
			</div>

			<div class="notifi-item">
				<img src="../assets/images/profil-nav.svg" alt="img">
				<div class="text">
				   <h4>Jane Doe</h4>
				   <p>@lorem ipsum dolor sit amet</p>
			    </div> 
			</div>

		</div>
	</nav>



	<script src="../js/bell.js"></script>
</body>
</html>