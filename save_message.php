<?php
// เชื่อมต่อกับฐานข้อมูล
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "live_chat_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$message = $_POST['message'];

$sql = "INSERT INTO chat (name, message, created_at) VALUES ('$name', '$message', NOW())";
$conn->query($sql);

$conn->close();
?>