<?php
// Step 1: Connect to the database
$servername = "localhost";
$username = "ranjitcj";
$password = "ranjitcj15";
$database = "campusnews";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Execute SQL Query
$sql = "SELECT * FROM usersinfo";
$result = $conn->query($sql);

// Step 3: Fetch Data
if ($result->num_rows > 0) {
    // Step 4: Display Data on Website
    while($row = $result->fetch_assoc()) {
        $unfpg = $row['username'];
        global $unfpg;
    }
} else {
    echo "0 results";
}