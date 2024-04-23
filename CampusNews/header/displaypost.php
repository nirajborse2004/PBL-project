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
$sql = "SELECT * FROM posts";
$result = $conn->query($sql);

// Step 3: Fetch Data
if ($result->num_rows > 0) {
    // Step 4: Display Data on Website
    while($row = $result->fetch_assoc()) {
        $id = $row['id'];
        // $image = $row['image'];
        $date = $row['created_at'];
        $title = $row['title'];
        $body = $row['body'];
        $main_body = $row['main_body'];
        $image_name = $row['image_name'];
        $image_data = $row['image_data'];
        // echo "{$row['image_path']}";
        // $image_name = $row['image_name'];
        // $image_path = $row['image_path'];
        // $image_ = readfile($image_path);
        global $id;
        global $date;
        global $title;
        global $body;
        global $main_body;
        global $image;
        // global $image_name;
        // global $image_path;
    }
} else {
    echo "0 results";
}

// Close connection
// $conn->close();



// Check if image ID is provided in the URL
// if(isset($_GET['image_id'])) {
//     $image_id = $_GET['image_id'];

//     // Fetch image data from the database
//     $sql = "SELECT image_name, image_path FROM userspost WHERE id = $image_id";
//     $result = $conn->query($sql);

//     if ($result->num_rows > 0) {
//         $row = $result->fetch_assoc();
//         $image_name = $row['image_name'];
//         $image_path = $row['image_path'];

//         // Set the appropriate header
//         header("Content-type: image/jpeg"); // You may need to change the content type based on your image type

//         // Output the image
//         readfile($image_path);
//         exit();
//     } else {
//         echo "Image not found.";
//     }
// }

// ?>

