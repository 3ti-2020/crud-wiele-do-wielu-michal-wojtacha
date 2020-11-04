<?php
 $conn = new mysqli("remotemysql.com", "iLlI4Mu3Ym", "cjbNgHQp2x", "iLlI4Mu3Ym");
 $id = $_POST['id'];
 $sql = "DELETE from lib_autor_tytul WHERE id_autor_tytul='$id'";
 mysqli_query($conn, $sql);
 header('Location: https://crud-michal-wojtacha.herokuapp.com');
?>