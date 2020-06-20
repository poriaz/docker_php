<?php echo "hola";
$servername = "mysql";
$username = "root";
$password = "Learn2Exceed@123";
$database = "pardeep_docker";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
