<?php
    session_start();
    if (!$_SESSION['login']) {
        header("Location: ./index.php");
    }
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sekretna strona</title>
</head>
<body>
    <div class="headik"></div>
    <div class="head">
    <a href="./index.php" class="karty">Powrót</a>
    <a href="log/logout.php" class="karty">Wyloguj</a>
    </div>
    <div class="left"></div>
    <main class="main">
        Sekretna zawartość ukryta za logowaniem.
    </main>
</body>
</html>