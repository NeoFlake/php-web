<?php

    $username = $_GET["username"];
    $genre = $_GET["genre"];
     $age = $_GET["age"];
    $ville = $_GET["ville"];
    $genre = $_GET["genre"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion d'utilisateur</title>
</head>
<body>
    <h1>Gestion d'utilisateur</h1>
    <p>
        Bonjour
        <?php
            if($genre == "homme"){
                echo "Monsieur";
            } else if($genre == "femme"){
                echo "Madame";
            }
            echo " $username , vous êtes un(e) $genre de $age ans de $ville";
        ?>
    </p>
</body>
</html>