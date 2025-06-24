<?php
    // Démarrer la session
    session_start();

    $username = "Doe";
    if($_REQUEST['username'] != ""){
        $username = $_REQUEST['username'];
    }
    $genre = "Madame";
    if($_REQUEST['genre'] and $_REQUEST["genre"] == "homme"){
        $genre = "Monsieur";
    }
    
    $age = $_REQUEST["age"];
    $ville = $_REQUEST["ville"];

    setcookie("nom", $username);

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
            echo " $username , vous êtes un(e) $genre de $age ans et êtes $ville";
        ?>
    </p>
    <a href="test.php">Consulter les cookies</a>
</body>
</html>