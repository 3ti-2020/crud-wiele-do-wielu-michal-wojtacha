<?php
 $conn = new mysqli("remotemysql.com", "iLlI4Mu3Ym", "cjbNgHQp2x", "iLlI4Mu3Ym");
 $id = $_POST['idtytul'];
 $sql = "INSERT INTO `lib_wypoz` (`id_wypoz`, `id_tytul`, `id_uzytk`, `data_wypoz`, `data_odda`) VALUES (NULL,'$id','1',curdate(),curdate())";
 mysqli_query($conn, $sql);
 header('Location: https://crud-michal-wojtacha.herokuapp.com/logowanie.php');
?>