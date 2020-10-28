<?php
 $conn = new mysqli("sql7.freemysqlhosting.net", "sql7373162", "5YpM88aCen", "sql7373162");
 $id = $_POST['id'];
 $sql = "DELETE from lib_autor_tytul WHERE id_autor_tytul='$id'";
 mysqli_query($conn, $sql);
 header('Location: https://crud-michal-wojtacha.herokuapp.com');
?>