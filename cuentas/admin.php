<?php
session_start();
if (!isset($_SESSION['ROL']) || $_SESSION['ROL'] != 'Admin') {
    header("Location: ../paginascuenta/noadmin.php");
    exit();
}
?>
