<?php
    // Démarrer la session
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>

<body>
    <h1>Cookies et sessions</h1>
    <h2>Cookies</h2>
    <p>Nom : <?php echo $_COOKIE['nom'] ?></p>
    <p>Nom : <?= $_COOKIE['nom'] ?></p>
    <h2>Sessions</h2>
    <p>Nom : <?php echo $_SESSION['nom'] ?></p>
    <p>Nom : <?= $_SESSION['nom'] ?></p>
</body>

</html>