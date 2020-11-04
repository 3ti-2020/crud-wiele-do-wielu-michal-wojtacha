<?php
    session_start();
    if ($_POST['login'] === "a" && $_POST['haslo'] === "a") $_SESSION['login'] = $_POST['login'];
    header("Location: ../logowanie.php");
?>
