<?php
// Database connection
$conn = new mysqli("localhost", "ranjitcj", "ranjitcj15", "campusnews");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
include 'C:\Users\Lenovo\OneDrive\Desktop\PBL-project\CampusNews\imgdisplay\index.php';
// Get image ID from the URL
$image_id = $_GET['id'];

// Retrieve image data from the database
$sql = "SELECT image_data, image_name FROM images WHERE id = $image_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output image data
    $row = $result->fetch_assoc();
    header("Content-type: image/jpg"); // Adjust content type based on image type
    echo $row['image_data'];
    // header("Location: index.php");
} else {
    echo "Image not found.";
}

$conn->close();
?>
