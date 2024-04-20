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
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM admin_id WHERE email='$email' AND epassword='$epassword'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $unfpg= $row["username"] ;
        global $unfpg;
    }
} else {
    echo 'Incorrect Password';
    exit();

}
$conn->close();
?>