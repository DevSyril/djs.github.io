<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admcss.css">
    <title>Espace administrateur | Connexion</title>
</head>

<body>
    <form action="../processing/login_process.php" method="POST">
        <div class="ring">
            <i style="--clr:#00ff0a;"></i>
            <i style="--clr:#ff0057;"></i>
            <i style="--clr:#fffd44;"></i>
            <div class="login">
                <h2>Connectez-vous</h2>
                <?php
                if (isset($_GET['page']) && $_GET['user'] == 'unknown') {
                    echo "<p class='error'>Les informations saisies sont incorrectes. Veuillez les vérifier et recommencez! </p>";
                }
                ?>
                <div class="inputBx">
                    <input type="text" placeholder="Nom d'utilisateur" name="username" id="username" required>
                </div>
                <div class="inputBx">
                    <input type="password" placeholder="Mot de passe" name="password" id="password" required>
                </div>
                <div class="inputBx">
                    <input type="submit" value="Connexion">
                </div>
            </div>
        </div>
    </form>
</body>

</html>