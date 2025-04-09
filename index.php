<?php
    session_start();
    ob_start();
    require_once 'config.php';
    header("Location: src/landing.php");
?>
