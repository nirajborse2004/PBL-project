<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/82edee0263.js" crossorigin="anonymous"></script>
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"  crossorigin="anonymous">
    <!--CUSTOM STYLING-->
    <link rel="stylesheet" href="/css/style.css">
    <!-- admin style -->
    <link rel="stylesheet" href="/css/admin.css">
    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">


    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- slick carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Custom script -->
    <script src="/js/scripts.js"></script>

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap"rel="stylesheet">

    <title>Post</title>

</head>
<body>


        <!-- Admin page wrapper-->
        <div class="admin-wrapper">
            <!--left sidebar  -->
            <div class="left-sidebar">
                <ul>

                </ul>
            </div>
            <!--/left sidebar  -->

            <!-- admin content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Add Posts</a>
                    <a href="index.php" class="btn btn-big">Manage Posts</a>
                </div>
                <?php
                // Database connection parameters
                $servername = "localhost";
                $username = "ranjitcj";
                $password = "ranjitcj15";
                $dbname = "campusnews";
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch data from the database
                $sql = "SELECT * FROM userpostreq order by created_at desc";
                $result = $conn->query($sql);

                // Check if there are any records
                if ($result->num_rows > 0) {
                    echo "<div class='content'>";
                    echo "<h2 class='page-title'>Your Posts</h2>";
                    echo "<table>";
                    echo "<thead>";
                    echo "<th>Title</th>";
                    echo "<th>Date</th>";
                    echo "<th colspan='3'>Action</th>";
                    echo "</thead>";
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tbody>";
                        echo "<tr>";
                        echo "<td>" . $row["title"] . "</td>";
                        echo "<td>" . $row["created_at"] . "</td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                } else {
                    echo "<div class='content'>";
                    echo "<h3>No Posts Yet</h3>";
                    echo "</div>";
                }
                // Close connection
                $conn->close();
                ?>
            </div>
            <!-- admin content -->
        </div>
        <!-- /page  wrapper -->
</body>
</html>

