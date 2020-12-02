<html>
<head></head> 
<body>
<?php
$servername = "localhost";
$username = "root";

$db="user";

// Create connection
$conn = new mysqli("$servername", "$username", " ", "$db");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->mysqli_connect_error());
} 

?>
</body>
</html>