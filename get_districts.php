<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Connection successful, show an alert
//echo '<script>alert("Connection to the database successful!");</script>';


// Fetch data with values from the database
$sql = "SELECT * FROM districts";
$result = $conn->query($sql);

$rows = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
}

$conn->close();

// Return the data (districts with values) as JSON
header('Content-Type: application/json');
echo json_encode($rows);
?>
