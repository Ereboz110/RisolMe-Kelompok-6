<?php
require_once '../config.php';
session_start();
session_unset();
session_destroy();
session_start();
header("Location: login.php");
exit();
?>