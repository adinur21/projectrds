<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rds";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

// sql to delete a record
$sql = "DELETE FROM students where nomor=1";
if ($conn->query($sql) === TRUE) {
  //echo "Record deleted successfully";
  echo "<script>alert('Record deleted successfully');location.href='index.php'</script>";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
