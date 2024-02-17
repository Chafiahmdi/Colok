<?php
    session_start();

    session_destroy();

    session_unset();

    header("location:../view/home-ch.php");
?>