<?php
session_start();
session_unset();
session_destroy();

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Location: эксперимент.php");
exit();
?>
