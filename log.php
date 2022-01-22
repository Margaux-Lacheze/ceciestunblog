<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleLog.css">
    <script type="text/javascript" src="index.js" defer></script>
    <title>Se connecter</title>
</head>
<body>
    <div class="page-wrapper">
        <?php
        require 'header.php';
        ?>
        <main class="form-container">
            <h1 class="title-log">Se connecter</h1>
            <form class="form-log" action="/accueil.php" method="POST">
                <label class="label-log" for="pseudo">Pseudo</label>
                <input class="input-log" type="text" name="pseudo">
                <label class="label-log" for="password">Mot de passe</label>
                <input class="input-log" type="password" name="password">
                <button class="btn-log" type="submit">Se connecter</button>
            </form>
            <div class="link-inscription-page">
                <a href="createAccount.php" class="a-inscrire">Pas encore inscrit ? S'inscrire</a>
            </div>
        </main>
        <?php
        require 'footer.php';
        ?>
    </div>
</body>
</html>