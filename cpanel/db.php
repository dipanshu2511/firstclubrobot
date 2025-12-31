<?php
$conn = new mysqli("localhost", "root", "", "admin_dashboard");

if ($conn->connect_error) {
    die("DB Connection Failed: " . $conn->connect_error);
}
?>
