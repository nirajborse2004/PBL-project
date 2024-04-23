<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"  crossorigin="anonymous">
    <!--CUSTOM STYLING-->
    <link rel="stylesheet" href="/css/style.css">
    <!-- <link rel="stylesheet" href="/CampusNews/css/style.css"> -->
    <!--GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <title>CampusNews</title>
<title>single post</title>
</head>
<body>


<header>
		<!-- LOGO -->
		<div class="logo">

			<h1 class="txt1">Trend<span>CAST</span></h1>
			<!--
			<h1 class="txt1"></h1>
			-->
		</div>


		<i class="menu-toggle" onClick="document.getElementById('nav').classList.toggle('showing');this.classList.toggle('change')">
			<div class="bar1"></div>
			<div class="bar2"></div>
			<div class="bar3"></div>
		</i>


		<!-- Link sections -->
		<div class="nav" id="nav">
			<ul>
				<li>
					<a href="#">HOME</a>
				</li>
				<li>
					<a href="#footer">ABOUT</a>
				</li>
                <li><a href="header/services.html">SERVICES</a></li>
                <li>
                    <a href="#">
                        <i id="hi" class="fa fa-user"></i>
                        <?php
                        include 'C:\Users\Lenovo\OneDrive\Desktop\PBL-project\CampusNews\php\login.php';
                        echo $unfpg ;
                        ?>
                        <i id="hi" class="fa fa-chevron-down"></i>
                    </a>
                    <ul>
                        <li><a href="/dashboard/index.php">Dashboard</a></li>
                        <li><a href="#" class="logout">LOGOUT</a></li>
                    </ul>
                </li>
			</ul>
		</div>
	</header>


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
                        $sql = "SELECT * FROM posts order by created_at desc";
                        $result = $conn->query($sql);

                        // Check if there are any records
                        if ($result->num_rows > 0) {
                            // Output data of each row
                            while($row = $result->fetch_assoc()) {
                                $image_name = $row['image_name'];
                                $image_data = $row['image_data'];
                                echo "<div class='content'>";
                                echo "<div class='main-content single'>";
                                echo "<h1 class='post-title'><a href='/php/single.php'>" . $row["title"] . "</a></h1>";
                                echo "<img class='post-image' src='data:image/jpeg;base64," . base64_encode($image_data) . "' alt='" . $image_name . "'>";
                                echo "&nbsp";
                                echo "<p class='post-content'>" . $row["main_body"] . "</p>";
                                echo "<p class='fa calender'>" . $row["created_at"] . "</p>";
                                echo "</div>";
                                echo "</div>";
                            }
                        } else {
                            echo "0 results";
                        }

                        // Close connection
                        $conn->close();
                        ?>

    </div>


    </div>
    <!--jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--custum script-->
    <script src="script.js"></script>
    <!-- slick carousel-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>



</body>
</html>