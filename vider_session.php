<?php
    session_start();
    session_unset();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vider session</title>
</head>
<body>
    <h1>Votre session est désormais vide</h1>
</body>
</html>