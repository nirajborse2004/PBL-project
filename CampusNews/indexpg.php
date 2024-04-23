<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trend Cast</title>

    <!--FONT AWESOME-->
    <script src="https://kit.fontawesome.com/82edee0263.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"  crossorigin="anonymous">
    <!--CUSTOM STYLING-->
    <link rel="stylesheet" href="/css/style.css">
    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">


    <!-- JQuery
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>-->

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




	<link rel="stylesheet" href="/css/styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Candal&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Candal&amp;family=Lora:ital,wght@0,400..700;1,400..700&amp;display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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


	<!-- Landing-Video -->
	<div class="video-img-pallet">
		<h1 onMouseOver="document.getElementById('vid').pause();" onMouseOut="document.getElementById('vid').play();" class="big-logo">TrendCast</h1>

		<video id="vid" autoplay loop muted plays-inline>
			<source id="src" src="/videos/clg.mp4" type="video/mp4">
		</video>
	</div>

	<!-- Page wrapper -->
	<div class="page-wrapper">
		<!-- post slider -->
		<div class="post-slider">
			<h1 class="slider-title">Trending Posts</h1>
			<i class="fas fa-chevron-left prev"></i>
			<i class="fas fa-chevron-right next"></i>

			<div class="post-wrapper">

				<div class="post">
					<img src="/images/trendingnews (1).jpg" alt="" class="slider-image">
					<div class="post-info">
						<h4><a href="/single.html">One Image 100 days and hundered takes</a></h4>
						<i id="author" class="far fa-user"> Robert Frost</i>
						&nbsp;
						<i class="far fa-calender">Mar 8,1934</i>
					</div>
				</div>
				<div class="post">
					<img src="/images/trendingnews (2).jpg" alt="" class="slider-image">
					<div class="post-info">
						<h4><a href="/single.html">One Image 100 days and hundered takes</a></h4>
						<i class="far fa-user">Robert Frost</i>
						&nbsp;
						<i class="far fa-calender">Mar 8,1934</i>
					</div>
				</div>
				<div class="post">
					<img src="/images/trendingnews (3).jpg" alt="" class="slider-image">
					<div class="post-info">
						<h4><a href="/single.html">One Image 100 days and hundered takes</a></h4>
						<i class="far fa-user">Robert Frost</i>
						&nbsp;
						<i class="far fa-calender">Mar 8,1934</i>
					</div>
				</div>
				<div class="post">
					<img src="/images/trendingnews (4).jpg" alt="" class="slider-image">
					<div class="post-info">
						<h4><a href="/single.html">One Image 100 days and hundered takes</a></h4>
						<i class="far fa-user">Robert Frost</i>
						&nbsp;
						<i class="far fa-calender">Mar 8,1934</i>
					</div>
				</div>
				<div class="post">
					<img src="/images/trendingnews (5).jpg" alt="" class="slider-image">
					<div class="post-info">
						<h4><a href="/single.html">One Image 100 days and hundered takes</a></h4>
						<i class="far fa-user">Robert Frost</i>
						&nbsp;
						<i class="far fa-calender">Mar 8,1934</i>
					</div>
				</div>
			</div>


		</div>
		<!-- Content -->
		<div class="content clearfix">

			<div class="main-content">
				<h1 class="recent-post-title">Recent Posts</h1>

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
                                echo "<div class='post clearfix'>";
                                // echo "<img class='post-image' src='/admin/posts/uploads/" . $row["image"] . "' alt='" . $row["title"] ." '>";
                                echo "<img class='post-image' src='data:image/jpeg;base64," . base64_encode($image_data) . "' alt='" . $image_name . "'>";
                                echo "<div class='post-preview'>";
                                echo "<h3><a href='/php/single.php'>" . $row["title"] . "</a></h3>";
                                echo "&nbsp";
                                echo "<span id='category'>Tech</span>";
                                echo "<p class='preview-text'>" . $row["body"] . "</p>";
                                echo "<p class='fa calender'>" . $row["created_at"] . "</p>";
                                // echo "<img src='uploads/" . $row["image"] . "' alt='" . $row["title"] .    "'>";
                                echo "<a href='/php/single.php' class='btn read-more'>Read More</a> ";
                                echo "</div>";
                                echo "</div>";
                            }
                        } else {
                            echo "0 results";
                        }

                        // Close connection
                        $conn->close();
                        ?>

<div class="post clearfix">
					<img src="/singlepost/image_2.png" alt="" class="post-image">
					<div class="post-preview clearfix">
						<h3><a href="/singlepost/post1.html">Science exhibitions have long been cherished as a platform where wonder meets education, where curiosity is sparked, and where innovation takes center stage.</a></h3>
						<i class="far fa-user"><span id="author">Elon Musk</span></i>
						&nbsp;
						<span id="category">Tech</span>
						<p class="preview-text">
							One of the most captivating aspects of a science exhibition is its hands-on approach to learning. Visitors are encouraged to touch, feel, and interact with the exhibits, fostering a deeper understanding of scientific concepts. From building simple machines to conducting fascinating experiments, there's no shortage of opportunities to engage both the mind and the senses.
						</p>
						<a href="/singlepost/post1.html" class="btn read-more">Read More</a>
					</div>
				</div>
				<div class="post clearfix">
					<img src="/singlepost/doodle6.png" alt="" class="post-image">
					<div class="post-preview clearfix">
						<h3><a href="/singlepost/post2.html">Are you ready to unlock the world of endless possibilities through coding? Look no further! Our Coding Club offers an exciting opportunity for beginners and experienced coders alike to dive into the thrilling world of programming. </a></h3>
						<i class="far fa-user"><span id="author">Elon Musk</span></i>
						&nbsp;
						<span id="category">Tech</span>
						<p class="preview-text">
							Whether you're a complete novice or a seasoned pro, we have something for everyone. Hands-On Projects: Get your hands dirty with real-world projects! From building websites to crafting mobile apps, you'll gain practical experience that sets you apart. Collaborative Environment: Connect with like-minded individuals who share your passion for coding. Collaborate on projects, exchange ideas, and build lasting friendships. Stay Ahead: In today's tech-driven world, coding skills are more valuable than ever. Gain the competitive edge you need to succeed in any field.
						</p>
						<a href="/singlepost/post2.html" class="btn read-more">Read More</a>
					</div>
				</div>
				<div class="post clearfix">
					<img src="/singlepost/image3main.jpg" alt="" class="post-image">
					<div class="post-preview clearfix">
						<h3><a href="/singlepost/post3.html">The lecture commenced with an overview of the hospitality industry, its evolution, and the pivotal role of hotel management within it. </a></h3>
						<i class="far fa-user"><span id="author">Elon Musk</span></i>
						&nbsp;
						<span id="category">Tech</span>
						<p class="preview-text">
							Lecture on "Those misunderstood Parents" by Mr. Vasant Baburao Hankare. As I sat in the dimly lit auditorium, surrounded by eager listeners, I found myself drawn into a profound exploration of one of life's most fundamental yet often overlooked topics: the importance of parents.
						</p>
						<a href="/singlepost/post3.html" class="btn read-more">Read More</a>
					</div>
				</div>

			</div>

			<div class="sidebar single clearfix">
				<div class="section popular">
					<h2 class="section-title">Popular</h2>

					<div class="post">
						<img src="/images/image_1.png" alt="img">
						<a herf="" class="title">how to overcome your fears</a>
					</div>
					<div class="post">
						<img src="/images/image_1.png" alt="img">
						<a herf="" class="title">how to overcome your fears</a>
					</div>
					<div class="post">
						<img src="/images/image_1.png" alt="img">
						<a herf="" class="title">how to overcome your fears</a>
					</div>
					<div class="post">
						<img src="/images/image_1.png" alt="img">
						<a herf="" class="title">how to overcome your fears</a>
					</div>
					<div class="post">
						<img src="/images/image_1.png" alt="img">
						<a herf="" class="title">how to overcome your fears</a>
					</div>
					<div class="post">
						<img src="/images/image_1.png" alt="img">
						<a herf="" class="title">how to overcome your fears</a>
					</div>
				</div>
				<div class="section topics">
					<h2 class="section-title">Topics</h2>
					<ul>
						<li><a herf="#">Clubs</a></li>
						<li><a herf="#">Students</a></li>
						<li><a herf="#">Activities</a></li>
						<li><a herf="#">industrial visit</a></li>
						<li><a herf="#">Motivation</a></li>
						<li><a herf="#">Inspiration</a></li>
						<li><a herf="#">Life Lessons</a></li>

					</ul>

				</div>
			</div>
		</div>

		<!--// Post Article -->
	</div>



	<!----------footer----------->
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
					<a href="#"> <li>Events</li> </a>
					<a href="#"> <li>Team</li> </a>
					<a href="#"> <li>Gallery</li> </a>
					<a href="#"> <li>Terms and Conditions</li> </a>
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
		<!--
			-->
	</div>
	<!---------------------->
	<!-- jquery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- slick js -->


	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {

			$('.post-wrapper').slick({
				slidesToShow: 3,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 2500,
				nextArrow: $('.next'),
				prevArrow: $('.prev'),
				responsive: [{
					/*
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }*/
				},
					{
						breakpoint: 1060,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 2
						}
					},
					{
						breakpoint: 620,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					}]

			});
		});
	</script>
</body>
</html>