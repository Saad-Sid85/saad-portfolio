<?php

session_start();

require 'config.php';

if(!isset($_SESSION['admin']))
{
    header("Location: admin_login.php");
    exit();
}

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="portfolio_messages.csv"');

$output = fopen("php://output","w");

fputcsv($output,[
    "ID",
    "Name",
    "Email",
    "Subject",
    "Message",
    "Status",
    "Date"
]);

$result = $conn->query("
SELECT *
FROM contact_messages
ORDER BY created_at DESC
");

while($row=$result->fetch_assoc())
{
    fputcsv($output,[
        $row['id'],
        $row['name'],
        $row['email'],
        $row['subject'],
        $row['message'],
        $row['status'],
        $row['created_at']
    ]);
}

fclose($output);

exit();

?>