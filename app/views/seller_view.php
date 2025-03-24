<?php
session_start();
if (!isset($_SESSION["user_id"]) || $_SESSION["role_name"] !== "Seller") {
    header("Location: ../login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Welcome, Seller!</h1>
        <p>This is your dashboard.</p>
        <a href="../logout.php" class="btn btn-danger">Logout</a>
    </div>
</body>
</html>
