<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'user') {
    header("Location: login.php");
    exit();
}
?>
<h1>Welcome, User <?php echo $_SESSION['username']; ?>!</h1>
<a href="logout.php">Logout</a>
