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
/* ===========================
   Pagination
=========================== */
$limit = 10;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if($page < 1){
    $page = 1;
}
$offset = ($page - 1) * $limit;
/* ===========================
   Search
=========================== */
$search = "";
if(isset($_GET['search'])){
    $search = trim($_GET['search']);
}
if($search != ""){
    $stmt = $conn->prepare("
        SELECT *
        FROM contact_messages
        WHERE
        name LIKE ?
        OR email LIKE ?
        OR subject LIKE ?
        ORDER BY created_at DESC
        LIMIT ?, ?
    ");
    $keyword = "%".$search."%";
    $stmt->bind_param("sssii",
        $keyword,
        $keyword,
        $keyword,
        $offset,
        $limit
    );
    $stmt->execute();
    $result = $stmt->get_result();
    $countStmt = $conn->prepare("
        SELECT COUNT(*) AS total
        FROM contact_messages
        WHERE
        name LIKE ?
        OR email LIKE ?
        OR subject LIKE ?
    ");
    $countStmt->bind_param(
        "sss",
        $keyword,
        $keyword,
        $keyword
    );
    $countStmt->execute();
    $totalRows = $countStmt
        ->get_result()
        ->fetch_assoc()['total'];
}else{
    $result = $conn->query("
        SELECT *
        FROM contact_messages
        ORDER BY created_at DESC
        LIMIT $offset,$limit
    ");
    $totalRows = $conn->query("
        SELECT COUNT(*) AS total
        FROM contact_messages
    ")
    ->fetch_assoc()['total'];
}
$totalPages = ceil($totalRows / $limit);
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
<div class="export-section">
<a href="export.php" class="export-btn">
<i class="fa-solid fa-file-csv"></i>
Export CSV
</a>
</div>
<form method="GET">
<input
type="text"
name="search"
placeholder="Search by Name, Email or Subject..."
value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
<button type="submit">
<i class="fa-solid fa-magnifying-glass"></i>
Search
</button>
</form>
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
<th>Status</th>
<th>View</th>
<th>Delete</th>
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
<?php
if($row['status']=="New"){
?>
<span class="status new">
New
</span>
<?php
}else{
?>
<span class="status read">
Read
</span>
<?php
}
?>
</td>
<td>
<a
href="view_message.php?id=<?= $row['id']; ?>"
class="view-btn">
<i class="fa-solid fa-eye"></i>
</a>
</td>
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
<div class="pagination">
<?php if($page > 1){ ?>
<a href="?page=<?= $page-1; ?>&search=<?= urlencode($search); ?>">
Previous
</a>
<?php } ?>
<?php for($i=1;$i<=$totalPages;$i++){ ?>
<a
href="?page=<?= $i; ?>&search=<?= urlencode($search); ?>"
class="<?= ($page==$i)?'active':''; ?>">
<?= $i; ?>
</a>
<?php } ?>
<?php if($page < $totalPages){ ?>
<a href="?page=<?= $page+1; ?>&search=<?= urlencode($search); ?>">
Next
</a>
<?php } ?>
</div>
</div>
</div>
</body>
</html>