<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="head"><h1>Michał Wojtacha</h1></div>
    <div class="left">
    <form action="insert.php" method="post">
    <p>Imie</p>
    <input type="text" name="imie">
    <p>Tytul</p>
    <input type="text" name="tytul"> <br>
    <input type="submit" value="DODAJ"> <br>
    </form>
    <?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "lib";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $result_autor = $conn->query("SELECT * FROM lib_autor");
    $result_tytuly = $conn->query("SELECT * FROM lib_tytul");

    echo("<form action='krzyz.php' method='POST'  class='insert'>");
    echo("<select name='autor'>");
    while($wiersz=$result_autor->fetch_assoc() ){
        echo("<option value='".$wiersz['id_autor']."'>".$wiersz['imie']."</option>");
    }
    echo("</select>");

    echo("<select name='tytul'>");
    while($wiersz=$result_tytuly->fetch_assoc() ){
        echo("<option value='".$wiersz['id_tytul']."'>".$wiersz['tytul']."</option>");
    }
    echo("</select>");

    echo("<input type='submit' value='DODAJ'>");
    echo("</form>");
    ?>
    </div>
    <div class="main">
    <?php
    $conn = new mysqli("127.0.0.1", "root", "","lib");
    $result = $conn -> query("select `lib`.`lib_autor_tytul`.`id_autor_tytul` AS `id_autor_tytul`,`lib`.`lib_autor`.`imie` AS `imie`,`lib`.`lib_tytul`.`tytul` AS `tytul` from `lib`.`lib_tytul` join `lib`.`lib_autor_tytul` join `lib`.`lib_autor` where `lib`.`lib_autor_tytul`.`id_autor` = `lib`.`lib_autor`.`id_autor` and `lib`.`lib_autor_tytul`.`id_tytul` = `lib`.`lib_tytul`.`id_tytul`");
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