<?php
    if(isset($_POST['submit']))
    {
        $user_name = $_POST['username'];
        $email = $_POST['email'];
        $epassword = $_POST['epassword'];
        $ecpassword = $_POST['ecpassword'];
    }
    $host = "localhost";
    $username = "ranjitcj";
    $password = "ranjitcj15";
    $dbname = "campusnews";
    $con = mysqli_connect($host, $username, $password, $dbname);
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }
    $sql = "INSERT INTO usersinfo(username, email, epassword, ecpassword) VALUES ('$user_name', '$email', '$epassword','$ecpassword')";
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        header("Location: /index.html");
        exit();
    }
    else {
        echo "Error: " . mysqli_error($con);
    }
    mysqli_close($con);
?>