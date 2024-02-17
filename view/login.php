<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php require('head.php') ;?>
    <title>Login</title>
</head>
<body>

    <?php require('nav.php'); ?>

    <form action="../controller/loginController.php" method="post">
    
    <input type="hidden" name="login">
    <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-envelope" style="border: none;"></i>
                </span>
            </div>
            <input type="email" class="form-control" name="email" id="email" placeholder="Adresse e-mail" required>
        </div>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-lock" style="border: none;"></i>
                </span>
            </div>
            <input type="password" class="form-control" name="mdp" id="mdp" placeholder="Mot de passe">
        </div>
        <button type="submit" class="btn btn-success" name="submit">Créer</button>


    </form>
</body>
</html>