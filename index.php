<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/4fb762f9bd.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="headik">
    <a href="https://github.com/3ti-2020/crud-wiele-do-wielu-michal-wojtacha" class="gthb"><i class="fab fa-github"></i>GITHUB</a>
    <form action="" method="post">
        <p>Nazwa użytkownika</p>
        <input type="text" name="user">
        <p>Hasło</p>
        <input type="text" name="haslo"><br>
        <input type="submit" value="ZALOGUJ">
    </form>
    </div>
    <div class="head"><h1>Michał Wojtacha grupa 1</h1>
    <a href="card/index.html" class="karty"><i class="fas fa-address-card"></i>KARTY</a>
    </div>
    <div id="left" class="left">
    <div><button id="bgbtn">FIOLETOWY</button>
    <button id="bgbtn1">RÓŻOWY</button>
    </div>
    <form action="insert.php" method="post">
    <p>Imie</p>
    <input type="text" name="imie">
    <p>Tytul</p>
    <input type="text" name="tytul"> <br>
    <input type="submit" value="DODAJ"> <br>
    </form>
    </div>
    <div class="main">
    <?php
    $conn = new mysqli("remotemysql.com", "iLlI4Mu3Ym", "cjbNgHQp2x", "iLlI4Mu3Ym");
    $result = $conn -> query("select `iLlI4Mu3Ym`.`lib_autor_tytul`.`id_autor_tytul` AS `id_autor_tytul`,`iLlI4Mu3Ym`.`lib_autor`.`imie` AS `imie`,`iLlI4Mu3Ym`.`lib_tytul`.`tytul` AS `tytul` from `iLlI4Mu3Ym`.`lib_tytul` join `iLlI4Mu3Ym`.`lib_autor_tytul` join `iLlI4Mu3Ym`.`lib_autor` where `iLlI4Mu3Ym`.`lib_autor_tytul`.`id_autor` = `iLlI4Mu3Ym`.`lib_autor`.`id_autor` and `iLlI4Mu3Ym`.`lib_autor_tytul`.`id_tytul` = `iLlI4Mu3Ym`.`lib_tytul`.`id_tytul`");
    echo("<table border='1'>");
    while($row = $result -> fetch_assoc()){
        echo("<tr class='myrow'>");
        echo("<td>".$row['id_autor_tytul']."</td>"."<td>".$row['imie']."</td>"."<td>".$row['tytul']."</td>"."<td>
        <form action='delete.php' method='POST'>
        <input type='hidden' name='id' value=".$row['id_autor_tytul'].">
        <input type='submit' value='delete'>
        </form> </td>");
        echo("</tr>");
    }
    echo("</table>");
    ?>
    </div>
    <script src="script.js"></script>
</body>
</html>