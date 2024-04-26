<?php
// Assuming you've already set up your database connection
$servername = "localhost"; // Change this to your database server name
$username = "username"; // Change this to your database username
$password = "password"; // Change this to your database password
$dbname = "database"; // Change this to your database name

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL query
    $sql = "SELECT * FROM posts_req, userpostreq WHERE posts_req.id = userpostreq.id ORDER BY created_at DESC";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // Execute statement
    $stmt->execute();

    // Fetch all rows
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Output the results
    foreach ($result as $row) {
        print_r($row);
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close connection
$conn = null;
?>
