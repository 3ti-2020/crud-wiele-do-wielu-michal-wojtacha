<?php
    $conn = new mysqli("remotemysql.com", "iLlI4Mu3Ym", "cjbNgHQp2x", "iLlI4Mu3Ym");
    $tytul = $_POST['tytul'];
    $login = $_POST['login'];
    $sql = "INSERT INTO `lib_wypoz`(`id_wypoz`, `id_tytul`, `id_uzytk`,`data_wypoz`,`data_odda`) VALUES (NULL,'$tytul','$login',curdate(),curdate() )";
    mysqli_query($conn, $sql);
    Header("Location:https://crud-michal-wojtacha.herokuapp.com/logowanie.php");
?>