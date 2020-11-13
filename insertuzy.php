<?php
$conn = new mysqli("remotemysql.com", "iLlI4Mu3Ym", "cjbNgHQp2x", "iLlI4Mu3Ym");
$login = $_POST['login'];
$haslo = $_POST['haslo'];
$sql_autor = "INSERT INTO `lib_uzytk` (`id_uzytk`, `login`, `haslo`, `admin`) VALUES (NULL, '$login', '$haslo', '0')";
mysqli_query($conn, $sql_autor);
Header('Location: https://crud-michal-wojtacha.herokuapp.com/logowanie.php')
?>