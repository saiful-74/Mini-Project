<?php
include 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $row['role'];

            if ($row['role'] == 'admin') {
                header("Location: admin_home.php");
            } else {
                header("Location: user_home.php");
            }
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }
}
?>

<form method="POST">
   <h1>After Login</h1>
        User id<input type="text" id="userId" name="user_id"><br>
        Password<input type="password" id="userPassword" name="user_password"><br>
        remember me<input type="checkbox" id="rememberMe" name="remember_me"><br>
        <input type="submit" value="Login" id="loginBtn">
        <a href="index.html">Register</a>
</form>
<!--  Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" value="Login"> -->