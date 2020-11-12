<?php
 $conn = new mysqli("remotemysql.com", "iLlI4Mu3Ym", "cjbNgHQp2x", "iLlI4Mu3Ym");
 $id = $_POST['idoddaj'];
 $sql = "DELETE FROM `lib_wypoz` WHERE `lib_wypoz`.`id_wypoz` = '$id'";
 mysqli_query($conn, $sql);
 header('Location: https://crud-michal-wojtacha.herokuapp.com/logowanie.php');
?>
