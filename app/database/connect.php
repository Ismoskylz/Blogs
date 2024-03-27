<?php

$host = 'localhost';
$user = 'root';
$pass = 'root';
$db_name = 'blog';

$conn = new mysqli($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Database Connection Error: '. $conn->connect_error);
}