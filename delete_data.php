
<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "student";


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM student_data WHERE id='".$_POST['id']."'";
$conn->query($sql);

$conn->close();
echo 'OK';


?>
