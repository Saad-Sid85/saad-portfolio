<?php
session_start();
require 'config.php';
if (isset($_SESSION['admin'])) {
    header("Location: dashboard.php");
    exit();
}
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $stmt = $conn->prepare("SELECT * FROM admin WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 1) {
        $admin = $result->fetch_assoc();
      if (password_verify($password, $admin['password'])) {

    $_SESSION['admin'] = $admin['username'];

    header("Location: dashboard.php");
    exit();

} else {

    $error = "Invalid Password!";

}
    } else {
        $error = "Invalid Username!";
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Login</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Poppins,sans-serif;
}
body{
    background:#000;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    color:#fff;
}
.login-box{
    width:400px;
    background:#111;
    padding:40px;
    border-radius:20px;
    border:1px solid rgba(255,255,255,.08);
}
.login-box h2{
    text-align:center;
    margin-bottom:30px;
}
.login-box input{
    width:100%;
    padding:15px;
    margin-bottom:20px;
    border:none;
    border-radius:10px;
    background:#1f1f1f;
    color:#fff;
}
.login-box button{
    width:100%;
    padding:15px;
    background:#fff;
    color:#000;
    border:none;
    border-radius:10px;
    cursor:pointer;
    font-weight:600;
}
.error{
    color:#ff4d4d;
    text-align:center;
    margin-bottom:15px;
}
</style>
</head>
<body>
<div class="login-box">
<h2>Admin Login</h2>
<?php
if($error!=""){
echo "<div class='error'>$error</div>";
}
?>
<form method="POST">
<input
type="text"
name="username"
placeholder="Username"
required>
<input
type="password"
name="password"
placeholder="Password"
required>
<button type="submit">
Login
</button>
</form>
</div>
</body>
</html>