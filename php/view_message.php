<?php
session_start();
require 'config.php';
if(!isset($_SESSION['admin']))
{
    header("Location: admin_login.php");
    exit();
}
if(!isset($_GET['id']))
{
    header("Location: dashboard.php");
    exit();
}
$id = (int)$_GET['id'];
/* Mark as Read */
$conn->query("
UPDATE contact_messages
SET status='Read'
WHERE id=$id
");
/* Fetch Message */
$stmt = $conn->prepare("
SELECT *
FROM contact_messages
WHERE id=?
");
$stmt->bind_param("i",$id);
$stmt->execute();
$message = $stmt->get_result()->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>View Message</title>
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
color:#fff;
padding:40px;
}
.container{
max-width:900px;
margin:auto;
background:#111;
padding:40px;
border-radius:20px;
border:1px solid rgba(255,255,255,.08);
}
h1{
margin-bottom:35px;
}
.item{
margin-bottom:25px;
}
.item h3{
margin-bottom:10px;
color:#888;
}
.item p{
line-height:30px;
}
.back{
display:inline-block;
margin-top:25px;
padding:14px 25px;
background:#fff;
color:#000;
text-decoration:none;
border-radius:10px;
font-weight:600;
}
</style>
</head>
<body>
<div class="container">
<h1>Message Details</h1>
<div class="item">
<h3>Name</h3>
<p><?= htmlspecialchars($message['name']); ?></p>
</div>
<div class="item">
<h3>Email</h3>
<p><?= htmlspecialchars($message['email']); ?></p>
</div>
<div class="item">
<h3>Subject</h3>
<p><?= htmlspecialchars($message['subject']); ?></p>
</div>
<div class="item">
<h3>Message</h3>
<p><?= nl2br(htmlspecialchars($message['message'])); ?></p>
</div>
<a href="dashboard.php" class="back">
← Back to Dashboard
</a>
</div>
</body>
</html>