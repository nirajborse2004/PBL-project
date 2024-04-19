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
$dsn = "mysql:host=localhost;dbname=campusnews";
$username = "ranjitcj";
$password = "ranjitcj15";
// Step 2: Execute SQL Query
$sql = "SELECT * FROM userspost";
$result = $conn->query($sql);

try {
    // Create a PDO instance
    $pdo = new PDO($dsn, $username, $password);

    // Prepare SQL query
    $stmt = $pdo->prepare("SELECT * FROM userspost");

    // Execute query
    $stmt->execute();

    // Fetch rows as associative array
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Loop through the rows and print columns
    foreach ($rows as $row) {
        echo "Title: " . $row['title'] . "<br>";
        echo "Body: " . $row['body'] . "<br>";
        echo "Date: " . $row['date'] . "<br>";
        echo "<br>";
    }
} catch (PDOException $e) {
    // Handle database connection errors
    echo "Connection failed: " . $e->getMessage();
}

// Step 3: Fetch Data
// if ($result->num_rows > 0) {
//     // Step 4: Display Data on Website
//     while($row = $result->fetch_assoc()) {
//         $title = $row['title'];
//         $body = $row['body'];
//         $date = $row['date'];
//         global $title;
//         global $body;
//         global $date;
//     }
// } else {
//     echo "0 results";
// }