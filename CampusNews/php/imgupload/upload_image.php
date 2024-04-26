<?php
// Check if image file is uploaded
if(isset($_FILES['image'])) {
    // Database connection
    $conn = new mysqli("localhost", "ranjitcj", "ranjitcj15", "campusnews");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // File details
    $image = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];

    // Read the image file
    $img_data = addslashes(file_get_contents($image));

    // SQL query to insert image data into the database
    $sql = "INSERT INTO images (image_name, image_data) VALUES ('$image_name', '$img_data')";

    if ($conn->query($sql) === TRUE) {
        echo "Image uploaded successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "No image selected.";
}
?>
