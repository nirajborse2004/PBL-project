<?php
// Database connection parameters
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

// SQL query to select data from userpostreq table
$sql_select = "SELECT * FROM userpostreq";

// Execute the query
$result = $conn->query($sql_select);

// Check if there are rows returned
if ($result->num_rows > 0) {
    // Loop through each row
    while ($row = $result->fetch_assoc()) {
        // Extract data from the row
        $id = $row['id'];
        $title = $row['title'];
        $body = $row['body'];
        $main_body = $row['main_body'];
        $image = $row['image'];
        $created_at = $row['created_at'];


        // SQL query to insert data into posts table
        $sql_insert = "INSERT INTO posts (id, title, body, main_body, image, created_at) VALUES ('0', '$title','$body','$main_body','$image','$created_at')";

        // Execute the insert query
        if ($conn->query($sql_insert) === TRUE) {
            echo "Data moved successfully!";
            header("Location: index.php");
        } else {
            echo "Error: " . $sql_insert . "<br>" . $conn->error;
        }
    }
} else {
    echo "No data to move.";
}

// Close connection
$conn->close();
?>
