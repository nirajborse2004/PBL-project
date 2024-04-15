<?php
// Database connection
$servername = "localhost";
$username = "ranjitcj";
$password = "ranjitcj15";
$dbname = "campusnews";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $body = $_POST['body'];
    $main_body = $_POST['main_body'];
    $file = $_FILES['image'];

    // File details
    $fileName = $_FILES['image']['name'];
    $fileTmpName = $_FILES['image']['tmp_name'];
    $fileSize = $_FILES['image']['size'];
    $fileError = $_FILES['image']['error'];
    $fileType = $_FILES['image']['type'];

    // File extension
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    // Allowed file types
    $allowed = array('jpg', 'jpeg', 'png', 'gif');

    if (in_array($fileExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) { // 1MB limit
                $fileNameNew = uniqid('', true) . "." . $fileExt;
                $fileDestination = 'uploads/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                // Insert into database
                $sql = "INSERT INTO userspost(title,body, main_body, image_name, image_path) VALUES ( '$title', '$body','$main_body','$fileName', '$fileDestination')";
                if ($conn->query($sql) === TRUE) {
                    header("Location: /CampusNews/userpg.php");
                    exit();
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo "File size is too large.";
            }
        } else {
            echo "Error uploading your file.";
        }
    } else {
        echo "Invalid file type.";
    }
    if (!$conn)
    {
        die("Connection failed!" . mysqli_connect_error());
    }
}
?>
