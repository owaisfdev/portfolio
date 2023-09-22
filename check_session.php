<?php
session_start();

// $response = $_SESSION['success_message'] = 'Record Added Successfully!';

header('Content-Type: application/json');
echo $_SESSION['success_message'];
?>