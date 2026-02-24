<?php
session_start();

// Database connection
$dsn = "mysql:host=localhost;dbname=campus_hub";
$dbUser = "root";
$dbPass = "yourpassword";

try {
    $conn = new PDO($dsn, $dbUser, $dbPass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Optional: redirect to login page if user not logged in
function checkLogin() {
    if (!isset($_SESSION['user'])) {
        header("Location: login.php"); // adjust to your login page
        exit();
    }
}
?>
