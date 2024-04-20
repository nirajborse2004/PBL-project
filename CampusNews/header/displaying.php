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

// Assuming you have a record ID to fetch the image from the database, replace '123' with your actual record ID
$record_id = 123;

// Fetch image path from database based on the record ID
$sql = "SELECT image_path FROM userspost WHERE id = $record_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $imagePath = $row['image_path'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Display Image</title>
</head>
<body>
    <!-- Display the image using the retrieved path -->
    <img src="<?php echo $imagePath; ?>" alt="Uploaded Image">
</body>
</html>
<?php
} else {
    echo "No image found for the given ID.";
}
?>
