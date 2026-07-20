<?php
session_start();
require 'config.php';
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}
/* ===========================
   Dashboard Statistics
=========================== */
$totalMessages = $conn->query("SELECT COUNT(*) AS total FROM contact_messages")
                      ->fetch_assoc()['total'];
$todayMessages = $conn->query("SELECT COUNT(*) AS total FROM contact_messages
WHERE DATE(created_at)=CURDATE()")
                      ->fetch_assoc()['total'];
$thisMonth = $conn->query("SELECT COUNT(*) AS total FROM contact_messages
WHERE MONTH(created_at)=MONTH(CURDATE())
AND YEAR(created_at)=YEAR(CURDATE())")
                  ->fetch_assoc()['total'];
/* ===========================
   Fetch Messages
=========================== */
$result = $conn->query("SELECT * FROM contact_messages
ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect"
href="https://fonts.gstatic.com"
crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
rel="stylesheet">
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<link rel="stylesheet"
href="dashboard.css">
</head>
<body>
<div class="dashboard">
<!-- ================= HEADER ================= -->
<header class="topbar">
<div>
<h1>
Portfolio Dashboard
</h1>
<p>
Welcome,
<strong>
<?= htmlspecialchars($_SESSION['admin']); ?>
</strong>
</p>
</div>
<a href="logout.php"
class="logout-btn">
<i class="fa-solid fa-right-from-bracket"></i>
Logout
</a>
</header>
<!-- ================= STATS ================= -->
<section class="stats">
<div class="stat-card">
<i class="fa-solid fa-envelope"></i>
<h2>
<?= $totalMessages; ?>
</h2>
<p>Total Messages</p>
</div>
<div class="stat-card">
<i class="fa-solid fa-calendar-day"></i>
<h2>
<?= $todayMessages; ?>
</h2>
<p>Today's Messages</p>
</div>
<div class="stat-card">
<i class="fa-solid fa-chart-column"></i>
<h2>
<?= $thisMonth; ?>
</h2>
<p>This Month</p>
</div>
</section>
<!-- ================= SEARCH ================= -->
<div class="search-box">
<input
type="text"
placeholder="Search feature coming in next update..."
disabled>
<button>
<i class="fa-solid fa-magnifying-glass"></i>
Search
</button>
</div>
<!-- ================= TABLE ================= -->
<div class="table-container">
<table>
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Subject</th>
<th>Message</th>
<th>Date</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php while($row = $result->fetch_assoc()) { ?>
<tr>
<td><?= $row['id']; ?></td>
<td><?= htmlspecialchars($row['name']); ?></td>
<td><?= htmlspecialchars($row['email']); ?></td>
<td><?= htmlspecialchars($row['subject']); ?></td>
<td><?= htmlspecialchars($row['message']); ?></td>
<td><?= $row['created_at']; ?></td>
<td>
<a
href="delete.php?id=<?= $row['id']; ?>"
class="delete-btn"
onclick="return confirm('Delete this message?')">
<i class="fa-solid fa-trash"></i>
</a>
</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
</body>
</html>