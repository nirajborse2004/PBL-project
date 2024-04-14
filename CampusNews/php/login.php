<?php
$unfpg = "";
$email = "";
$epassword = "";
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $epassword = $_POST['epassword'];
}
$host = "localhost";
$username = "ranjitcj";
$password = "ranjitcj15";
$dbname = "campusnews";
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Query the Database
$sql = "SELECT * FROM usersinfo WHERE email='$email' AND epassword='$epassword'";
$result = $conn->query($sql);

// Step 3: Fetch Data
if ($result->num_rows > 0) {
    // header("Location: /CampusNews/userpg.html");
    //     exit();

    while($row = $result->fetch_assoc()) {
        $unfpg= $row["username"] ;  //ifl= info from login to userpg
        global $unfpg;
    }
} else {
    echo "why why";
}

// Close connection
$conn->close();
?>


