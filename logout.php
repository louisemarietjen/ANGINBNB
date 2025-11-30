<?php
    session_start();

    unset($_SESSION['logged_id_user']);
    header("Location: index.php");
    exit()
?>