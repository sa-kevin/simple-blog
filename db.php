<?php
require 'vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$servername = $_ENV['DB_HOST'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASS'];
$dbname = $_ENV['DB_NAME'];

// creat co
$conn = new mysqli($servername, $username, $password, $dbname);

// check co
if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
} 
?> 