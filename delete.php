<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "lib";
 $conn = new mysqli($servername, $username, $password, $dbname);
 $id = $_POST['id'];
 $sql = "DELETE from lib_autor_tytul WHERE id_autor_tytul='$id'";
 mysqli_query($conn, $sql);
 header('Location: http://127.0.0.1/lib2/index.php');
?>