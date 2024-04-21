<!DOCTYPE html>
<html>
<head>
    <title>Display Image</title>
</head>
<body>

<?php
// Database connection
$conn = new mysqli("localhost", "ranjitcj", "ranjitcj15", "campusnews");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve image data from the database
$sqld = "SELECT image_name, image_data FROM images WHERE id = 5";
$result = $conn->query($sqld);
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $image_name = $row['image_name'];
        $image_data = $row['image_data'];
        // Output the image
        echo "<img src='data:image/jpeg;base64," . base64_encode($image_data) . "' alt='" . $image_name . "'>";
    }
} else {
    echo "No image found.";
}

$conn->close();
?>

</body>
</html>
