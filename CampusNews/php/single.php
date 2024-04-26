<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>science exibition </title>
    <link rel="stylesheet" href="/singlepost/style3.css">
    <link href="https://fonts.googleapis.com/css2?family=Candal&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Candal&amp;family=Lora:ital,wght@0,400..700;1,400..700&amp;display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>


    <div class="floatfix"></div>
	<header>
		<!-- LOGO -->
		<div class="logo">

			<h1 class="txt1">Trend<span>CAST</span></h1>
			<!--
			<h1 class="txt1"></h1>
			-->
		</div>

		<!-- Toggle Btn
				<i class="fa fa-bars menu-toggle" onClick="document.getElementById('nav').classList.toggle('showing')"></i>
				-->

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
				<li>
					<a href="#">SERVICES</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-user"></i>
						USER-NAME
						<i class="fa fa-chevron-down"></i>
					</a>
					<ul>
						<li><a href="#">DASHBOARD</a></li>
						<li><a href="#" class="logout">LOG-OUT</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</header>

    <div class="blog-wrapper">
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
                echo "<h1 class='heading'>" . $row["title"] . "</h1>";
				echo "<img class='image' src='data:image/jpeg;base64," . base64_encode($image_data) . "' alt='" . $image_name . "'>";
                echo "&nbsp";
                echo "<p>" . $row["main_body"] . "</p>";
                echo "<p class='fa calender'>" . $row["created_at"] . "</p>";

                echo "<div class='about-author'>";
				echo "By ~ <span id='author'>TrendCast</span><br>";
				echo "Contact : <span id='email'>abc@gmail.com</span>";
				echo "</div>";

            }
        } else {
            echo "0 results";
        }
        // Close connection
        $conn->close();
        ?>

    </div>


    <!-- Footer -->
	<div class="footer" id="footer">
		<div class="footer-content">
			<div class="footer-section about">

				<h1 class="logo-text"> <span>Trend</span>Cast</h1>
				<p>
					TrendCast is a blog website for our college students for the purpose of posting the new trends.
					However, it is a very useful website

				</p>
				<div class="contact">
					<span> <i class="fas fa-phone"> </i>  &nbsp; 987-654-321</span>
					<span> <i class="fas fa-envelope"> </i>  &nbsp; info@trendcast.com</span>

				</div>
				<div class="socials">
					<a href="#"> <i class="fa-brands fa-youtube"></i> </a>
					<a href="#">  <i class="fa-brands fa-twitter"></i> </a>
					<a href="#"> <i class="fa-brands fa-instagram"></i> </a>
					<a href="#"> <i class="fa-brands fa-facebook"></i> </a>
				</div>
			</div>


			<div class="footer-section links">
				<h2> Quick Links </h2>
				<br>
				<ul>
					<a href=""> <li>Events</li> </a>
					<a href=""> <li>Team</li> </a>
					<a href=""> <li>Gallery</li> </a>
					<a href=""> <li>Terms and Conditions</li> </a>
				</ul>
			</div>
			<div class="footer-section contact-form">
				<h2>Contact us </h2>
				<br>
				<form action="" method="post">

					<input type="email" name="email" class="text-input contact-input" placeholder="Your email adress....">
					<br>
					<textarea name=" message" class="text-input contact-input" placeholder="Your message...."></textarea>
					<br>
					<button type="submit" class="btn btn-big contact-btn">
						<i class="fas fa-envelope"> </i>  Send
					</button>
				</form>
			</div>
		</div>
		<div class="footer-bottom">
			&copy; codingpoets.com | Designed by TrendCast
		</div>

	</div>


</body>
</html>