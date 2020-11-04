<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="head"><h1>Michał Wojtacha grupa 1</h1>
    <a href="card/index.html" class="karty">KARTY</a>
    <a href="https://github.com/3ti-2020/crud-wiele-do-wielu-michal-wojtacha" class="gthb">GITHUB</a>
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
    <div class="main">
    <?php
    $conn = new mysqli("sql7.freemysqlhosting.net", "sql7373162", "5YpM88aCen", "sql7373162");
    $result = $conn -> query("select `sql7373162`.`lib_autor_tytul`.`id_autor_tytul` AS `id_autor_tytul`,`sql7373162`.`lib_autor`.`imie` AS `imie`,`sql7373162`.`lib_tytul`.`tytul` AS `tytul` from `sql7373162`.`lib_tytul` join `sql7373162`.`lib_autor_tytul` join `sql7373162`.`lib_autor` where `sql7373162`.`lib_autor_tytul`.`id_autor` = `sql7373162`.`lib_autor`.`id_autor` and `sql7373162`.`lib_autor_tytul`.`id_tytul` = `sql7373162`.`lib_tytul`.`id_tytul`");
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
</body>
</html>