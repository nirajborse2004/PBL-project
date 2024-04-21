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

    <title>CampusNews</title>
</head>
<body>
<header>
        <div class="logo" onClick="document.body.classList.toggle('bt')">
			<h1 class="txt1">Trent<span>Cast</span></h1>
		</div>
        <i class="fa fa-bars menu-toggle" onClick="document.getElementById('nav').classList.toggle('showing')"></i>
        <nav class = "navbar">
            <i class="fa-solid fa-bars menue-toggle"></i>
            <ul class="sub">
                <li><a href="#">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="/header/services.html">SERVICES</a></li>
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
        </nav>
    </header>

    <div class="video-img-pallet">
		<div class="video-img-tint">
			<h1 onMouseOver="document.getElementById('vid').pause();" onMouseOut="document.getElementById('vid').play();" class="big-logo">TrentCast</h1>
		</div>
		<video id="vid"  autoplay loop muted plays-inline>
        	<source id="src" src="/videos/clg.mp4" type="video/mp4">
  		</video>
		<!--
		-->
	</div>


        <!-- page wrapper-->
        <div class="page-wrapper">

            <!-- post slider -->
            <div class="post-slider">
                <h1 class="slider-title">Trending Posts</h1>
                <i class="fas fa-chevron-left prev"></i>
                <i class="fas fa-chevron-right next"></i>
                <div class="post-wrapper">

                    <div class="post">
                        <img src="/images/trendingnew(10).jpeg" alt="" class="slider-image">
                        <div class="post-info">
                            <h4><a href="single.html">Design is not just what it looks like and feels like. Design is how it works. -Steve Jobs</a></h4>
                            <i class="fas fa-user">Mrinalini</i>
                            &nbsp;
                            <i class="far fa-calendar"> March 15, 2024</i>
                        </div>
                    </div>

                    <div class="post">
                        <img src="/images/trendingnews (1).jpg" alt="" class="slider-image">
                        <div class="post-info">
                            <h4><a href="single.html">Design is not just what it looks like and feels like. Design is how it works. -Steve Jobs</a></h4>
                            <i class="fas fa-user">Mrinalini</i>
                            &nbsp;
                            <i class="far fa-calendar"> March 15, 2024</i>
                        </div>
                    </div>

                    <div class="post">
                        <img src="/images/trendingnews (2).jpg" alt="" class="slider-image">
                        <div class="post-info">
                            <h4><a href="single.html">Design is not just what it looks like and feels like. Design is how it works. -Steve Jobs</a></h4>
                            <i class="fas fa-user">Mrinalini</i>
                            &nbsp;
                            <i class="far fa-calendar"> March 15, 2024</i>
                        </div>
                    </div>

                    <div class="post">
                        <img src="/images/trendingnews (3).jpg" alt="" class="slider-image">
                        <div class="post-info">
                            <h4><a href="single.html">Design is not just what it looks like and feels like. Design is how it works. -Steve Jobs</a></h4>
                            <i class="fas fa-user">Mrinalini</i>
                            &nbsp;
                            <i class="far fa-calendar"> March 15, 2024</i>
                        </div>
                    </div>

                    <div class="post">
                        <img src="/images/trendingnews (4).jpg" alt="" class="slider-image">
                        <div class="post-info">
                            <h4><a href="single.html">Design is not just what it looks like and feels like. Design is how it works. -Steve Jobs</a></h4>
                            <i class="fas fa-user">Mrinalini</i>
                            &nbsp;
                            <i class="far fa-calendar"> March 15, 2024</i>
                        </div>
                    </div>
                </div>

                <!-- content -->
                <div class="content clearfix">

                    <!-- Main Content -->
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
                                echo "<div class='post clearfix'>";
                                echo "<img class='post-image' src='/admin/posts/uploads/" . $row["image"] . "' alt='" . $row["title"] ." '>";
                                echo "<div class='post-preview'>";
                                echo "<h2>" . $row["title"] . "</h2>";
                                echo "<p class='preview-text'>" . $row["body"] . "</p>";
                                echo "<p class='fa calender'>" . $row["created_at"] . "</p>";
                                // echo "<img src='uploads/" . $row["image"] . "' alt='" . $row["title"] .    "'>";
                                echo "<a href='single.html' class='btn read-more'>Read More</a> ";
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
                            <img src="/images/trendingnews (6).jpg" alt="post" class="post-image">
                            <div class="post-preview">
                                <h2><a href="single.html">To  </a></h2>
                                &nbsp;
                                <i class="fa calender">March 26, 2024</i>
                                <p class="preview-text">Bruce Lee was a Hong Kong-American martial artist and actor. He was the founder of Jeet Kune Do, a hybrid martial arts philosophy drawing from different combat disciplines that is sometimes credited with paving the way for modern mixed martial arts. </p>
                                <a href="single.html" class="btn read-more">Read More</a>
                            </div>
                        </div>
                        <div class="post clearfix">
                            <img src="/images/trendingnews (1).jpg" alt="post" class="post-image">
                            <div class="post-preview">
                                <h2><a href="single.html">To hell with circumstances, I create opportunities. </a></h2>
                                &nbsp;
                                <i class="fa calender">March 26, 2024</i>
                                <p class="preview-text">Bruce Lee was a Hong Kong-American martial artist and actor. He was the founder of Jeet Kune Do, a hybrid martial arts philosophy drawing from different combat disciplines that is sometimes credited with paving the way for modern mixed martial arts. </p>
                                <a href="single.html" class="btn read-more">Read More</a>
                            </div>
                        </div>
                        <div class="post clearfix">
                            <img src="/images/trendingnews (3).jpg" alt="post" class="post-image">
                            <div class="post-preview">
                                <h2><a href="single.html">To hell with circumstances, I create opportunities. </a></h2>
                                &nbsp;
                                <i class="fa calender">March 26, 2024</i>
                                <p class="preview-text">Bruce Lee was a Hong Kong-American martial artist and actor. He was the founder of Jeet Kune Do, a hybrid martial arts philosophy drawing from different combat disciplines that is sometimes credited with paving the way for modern mixed martial arts. </p>
                                <a href="single.html" class="btn read-more">Read More</a>
                            </div>
                        </div>

                    </div>
                    <!-- /Main Content -->
                    <div class="sidebar">
                        <div class="section search">
                            <h2 class="section-title">Search</h2>
                            <form action="index.html" method="post">
                                <input type="text" name="search-term" class="text-input" placeholder="Search...">
                            </form>
                        </div>

                        <div class="section topics">
                            <h2 class="section-title">Topics</h2>
                            <ul>
                                <li><a href="#">IPL</a></li>
                                <li><a href="#">SPPU Exam</a></li>
                                <li><a href="#">Election</a></li>
                                <li><a href="#">Delhi</a></li>
                                <li><a href="#">Pune</a></li>
                                <li><a href="#">Mumbai</a></li>
                                <li><a href="#">US Bridge</a></li>
                                <li><a href="#">Corruption</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /content -->
            </div>
            <!-- /post slider -->
        </div>
        <!-- /page  wrapper -->

        <!--footer-->
        <div class="footer">
            <div class="footer-content">
                <div class="footer-section about">

                    <h1 class="logo-text"> <span>Trend</span>Cast</h1>

                    <p>
                        TrendCast is a real blog website for our college students for the purpose of posting the new trends.
                        However, it is a very useful website
                    </p>

                    <div class="contact">
                        <span> <i class="fas fa-phone"> </i>  &nbsp; 987-654-321</span>
                        <span> <i class="fas fa-envelope"> </i>  &nbsp; info@trendcast.com</span>
                    </div>


                    <div class="socials">
                        <a href="#"> <i class="fa-brands fa-instagram"></i></a>
                        <a href="#"> <i class="fa-brands fa-youtube"></i></a>
                        <a href="#">  <i class="fa-brands fa-twitter"></i></a>
                        <a href="#"> <i class="fa-brands fa-facebook"></i></a>
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
                    <form action="mypart.html" method="post">

                        <input type="email" name="email" class="text-input contact-input" placeholder="Your email adress....">
                        <br>
                        <textarea name=" message" class="text-input contact-input" placeholder="Your message...."></textarea>
                        <br>
                        <button type="submit" class="btn btn-big contact-btn">
                            <i class="fas fa-envelope"></i>  Send
                        </button>

                    </form>

                </div>



            </div>
            <div class="footer-bottom">

                &copy; codingpoets.com | Designed by Trendcast
            </div>
        </div>


        <!-- / footer-->

</body>
</html>


