
<?php
$servername = "localhost";
$username = "admin123";
$password = "admin123!@#";
$dbname = "enzymeoc";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// echo "connect";
return $conn;
?>