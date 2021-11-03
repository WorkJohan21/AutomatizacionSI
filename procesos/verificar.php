<?php
    session_start();

    if (!isset($_SESSION["sw"]))
    {
        header("Location: ../index.php");
    }
?>