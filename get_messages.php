<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "live_chat_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, message, DATE_FORMAT(created_at, '%H:%i:%s') as time FROM chat ORDER BY created_at ASC";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    echo "<p>[" . $row['time'] . "] " . $row['name'] . ": " . $row['message'] . "</p>";
}

$conn->close();
?>