<?php
 $conn = new mysqli("sql7.freemysqlhosting.net", "sql7373162", "5YpM88aCen", "sql7373162");
 $sql = "INSERT INTO lib_autor(id_autor, imie) VALUES (NULL, '".$_POST['imie']."') ";
 mysqli_query($conn, $sql);
 header('Location: http://127.0.0.1/lib2/index.php');
?>

<?php
 $conn = new mysqli("sql7.freemysqlhosting.net", "sql7373162", "5YpM88aCen", "sql7373162");
 $sql = "INSERT INTO lib_tytul(id_tytul, tytul) VALUES (NULL , '".$_POST['tytul']."') ";
 mysqli_query($conn, $sql);
 header('Location: https://crud-michal-wojtacha.herokuapp.com');
?> 