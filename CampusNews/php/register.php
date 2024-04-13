<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $user_name = $_POST['username'];
        $email = $_POST['email'];
        $epassword = $_POST['password'];
        $ecpassword = $_POST['cpassword'];
    }

    // database details
    $host = "localhost";
    $username = "ranjitcj";
    $password = "ranjitcj15";
    $dbname = "campusnews";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO usersinfo(name, email, password, cpassword) VALUES ('$user_name', '$email', '$epassword','$ecpassword')";

    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        // Redirect to login.html after successful registration
        header("Location: /CampusNews/index.html");
        exit(); // Make sure no other output is sent to the browser
    }
    else {
        echo "Error: " . mysqli_error($con); // Print any errors that occur during the query execution
    }
    // if($rs)
    // {
    //     echo "Entries added!";
    // }

    // close connection
    mysqli_close($con);

?>