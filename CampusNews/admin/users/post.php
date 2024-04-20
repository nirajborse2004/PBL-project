<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "localhost";
    $username = "ranjitcj";
    $password = "ranjitcj15";
    $dbname = "campusnews";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind parameters
    $title = $_POST['title'];
    $body = $_POST['body'];
    $main_body = $_POST['main_body'];
    $image = $_FILES['image']['name']; // Assuming you're storing image filenames in the database

    // Insert data into the database
    $sql = "INSERT INTO posts (title, body, main_body, image) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $title, $body, $main_body, $image);

    // Upload image file
    $target_dir = "uploads/"; // Directory where you want to store uploaded images
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    // Execute SQL statement
    if ($stmt->execute() === TRUE) {
        header("Location: index.php");

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $stmt->close();
    $conn->close();
}
?>
