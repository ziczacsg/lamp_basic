<?php
require_once 'mysqlconfig.php';

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
