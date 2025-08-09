<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    $sql = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";
    if ($conn->query($sql)) {
        echo "Registration successful. <a href='login.php'>Login here</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<form method="POST">
    <Div>
        ID:<input type="text" id="text1" name="id"><br>
        Password:<input type="password" id="text2" name="password"><br>
        confirm Password:<input type="password" id="text3" name="confirm_password"><br>
        Name:<input type="text" id="text4" name="name"><br>
        Email:<input type="email" id="text5" name="email"><br>
        user Type:
        <select id="text6" name="user_type">
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select><br>
        <input type="submit" value="Register" id="submitBtn">
        <a href="login.html">Log in</a>
    </Div>
</form>
<