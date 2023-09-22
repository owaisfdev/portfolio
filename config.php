<?php
$servername = "sdb-64.hosting.stackcp.net";
$username = "portfolio-35303337a080";
$password = "liymqldag6";
$dbname = "portfolio-35303337a080";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>