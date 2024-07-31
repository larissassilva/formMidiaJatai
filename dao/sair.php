<?php
    session_start();
    ob_start();
    unset($_SESSION['id'], $_SESSION['nome'], $_SESSION['email'] );
    session_destroy();
    header("Location: ../login.php");

?>