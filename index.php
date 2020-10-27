<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
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