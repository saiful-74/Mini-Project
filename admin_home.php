<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit();
}
?>
<h1>Welcome, Admin <?php echo $_SESSION['username']; ?>!</h1>
<a href="logout.php">Logout</a>
