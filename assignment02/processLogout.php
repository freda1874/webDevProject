<?php
session_start();

if (isset($_SESSION['user'])) {
    // Set session variable
    $_SESSION['user'] = null;
}
header("Location: default.php");
?>