<!DOCTYPE html>
<html>
<head>
    <title>Display Image</title>
</head>
<body>
    <?php
    // Get image ID from the URL

    // include 'C:\Users\Lenovo\OneDrive\Desktop\PBL-project\CampusNews\imgdisplay\display.php';
    // echo $unfpg ;
    // echo "<form action='/imgupload/upload_image.php' method='post' enctype='multipart/form-data'>";
    // echo "<input type='text' name='id' class='text-input'>";
    // echo "<input type='submit' name='submit' value='Add Post' class='btn btn-big'>";
    // echo "</form>";
    // $image_id = $_GET[1];
    ?>
    <img src="display.php?id=<?php echo $image_id; ?>" alt="Image">
</body>
</html>
