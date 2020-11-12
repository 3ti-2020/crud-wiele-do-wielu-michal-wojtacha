<?php
    session_start();
    if (!$_SESSION['login']) {
        header("Location: index.php");
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
    <a href="index.php" class="karty">Powrót</a>
    <a href="log/logout.php" class="karty">Wyloguj</a>
    </div>
    <div class="left">
    <form action="insert.php" method="post">
    <p>Imie</p>
    <input type="text" name="imie">
    <p>Tytul</p>
    <input type="text" name="tytul"> <br>
    <input type="submit" value="DODAJ"> <br>
    </form>
    </div>
    <main class="main">
    <?php
    $conn = new mysqli("remotemysql.com", "iLlI4Mu3Ym", "cjbNgHQp2x", "iLlI4Mu3Ym");
    $result = $conn -> query("select `iLlI4Mu3Ym`.`lib_autor_tytul`.`id_autor_tytul` AS `id_autor_tytul`,`iLlI4Mu3Ym`.`lib_autor`.`imie` AS `imie`,`iLlI4Mu3Ym`.`lib_tytul`.`tytul` AS `tytul` from `iLlI4Mu3Ym`.`lib_tytul` join `iLlI4Mu3Ym`.`lib_autor_tytul` join `iLlI4Mu3Ym`.`lib_autor` where `iLlI4Mu3Ym`.`lib_autor_tytul`.`id_autor` = `iLlI4Mu3Ym`.`lib_autor`.`id_autor` and `iLlI4Mu3Ym`.`lib_autor_tytul`.`id_tytul` = `iLlI4Mu3Ym`.`lib_tytul`.`id_tytul`");
    echo("<table class='tabelka' border='1'>");
    echo("<th>Id</th>");
    echo("<th>Autor</th>");
    echo("<th>Tytuł</th>");
    echo("<th>Delete</th>");
    echo("<th>Wypożycz</th>");
    while($row = $result -> fetch_assoc()){
        echo("<tr class='myrow'>");
        echo("<td>".$row['id_autor_tytul']."</td>"."<td>".$row['imie']."</td>"."<td>".$row['tytul']."</td>"."<td>
        <form action='delete.php' method='POST'>
        <input type='hidden' name='id' value=".$row['id_autor_tytul'].">
        <input type='submit' value='delete'>
        </form> </td>");
        echo("<td>
        <form action='wypozycz.php' method='POST'>
        <input type='hidden' name='idtytul' value=".$row['id_autor_tytul'].">
        <input type='submit' value='wypozycz'>
        </form> </td>");
        echo("</tr>");
    }
    echo("</table>");
    ?>
    <?php
    $conn = new mysqli("remotemysql.com", "iLlI4Mu3Ym", "cjbNgHQp2x", "iLlI4Mu3Ym");
    $result = $conn -> query("SELECT id_wypoz, lib_wypoz.id_tytul, lib_tytul.tytul, lib_uzytk.login, lib_uzytk.haslo, data_wypoz FROM lib_wypoz,lib_uzytk,lib_tytul WHERE lib_wypoz.id_tytul = lib_tytul.id_tytul AND lib_wypoz.id_uzytk=lib_uzytk.id_uzytk
    ");
    echo("<table class='tabelka' border='1'>");
    echo("<th>Id</th>");
    echo("<th>Id tytuł</th>");
    echo("<th>Tytuł</th>");
    echo("<th>Login</th>");
    echo("<th>Hasło</th>");
    echo("<th>Data</th>");
    echo("<th>Oddaj</th>");
    while($row = $result -> fetch_assoc()){
        echo("<tr class='myrow'>");
        echo("<td>".$row['id_wypoz']."</td>"."<td>".$row['id_tytul']."</td>"."<td>".$row['tytul']."</td>"."<td>".$row['login']."</td>"."<td>".$row['haslo']."</td>"."<td>".$row['data_wypoz']."</td>");
        echo("<td>
        <form action='oddaj.php' method='POST'>
        <input type='hidden' name='idoddaj' value=".$row['id_wypoz'].">
        <input type='submit' value='Oddaj'>
        </form> </td>");
        echo("</tr>");
    }
    echo("</table>");
    ?>
    </main>
</body>
</html>