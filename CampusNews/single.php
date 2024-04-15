<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"  crossorigin="anonymous">
    <!--CUSTOM STYLING-->
    <link rel="stylesheet" href="/CampusNews/css/style.css">
    <!--GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <title>CampusNews</title>
<title>single post</title>
</head>
<body>


    <nav class = "navbar">
        <header>
            <i class="fa-solid fa-bars menue-toggle"></i>
            <ul class="sub">
                <li><a href="#">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="/CampusNews/services.html">SERVICES</a></li>
                <li>
                    <a href="#">
                        <i id="hi" class="fa fa-user"></i>
                        User
                        <i id="hi" class="fa fa-chevron-down"></i>
                    </a>
                    <ul>
                        <li><a href="/CampusNews/register.html">Sign-up</a></li>
                    </ul>
                </li>
            </ul>
        </header>
    </nav>




    <div class="content ">
        <div class="main-content single">
            <h1 class="post-title">
                <?php
                include 'C:\Users\Lenovo\OneDrive\Desktop\PBL-project\CampusNews\displaypost.php';
                echo $title;
                ?>
            </h1>
            <div class="post-content">
                <p>
                <?php
                include 'C:\Users\Lenovo\OneDrive\Desktop\PBL-project\CampusNews\displaypost.php';
                echo $main_body;
                ?>
                </p>
            </div>
        </div>


        <div class="sidebar single">
            <div class="section popular">
                <h2 class="section title">popular</h2>
                <div class="post">
                    <img src="images/image_1.png" alt="img">
                    <a herf="" class="title">how to overcome your fears</a>
                </div>
                <div class="post">
                    <img src="images/image_1.png" alt="img">
                    <a herf="" class="title">how to overcome your fears</a>
                </div>
                <div class="post">
                    <img src="images/image_1.png" alt="img">
                    <a herf="" class="title">how to overcome your fears</a>
                </div>
                <div class="post">
                    <img src="images/image_1.png" alt="img">
                    <a herf="" class="title">how to overcome your fears</a>
                </div>
                <div class="post">
                    <img src="images/image_1.png" alt="img">
                    <a herf="" class="title">how to overcome your fears</a>
                </div>
                <div class="post">
                    <img src="images/image_1.png" alt="img">
                    <a herf="" class="title">how to overcome your fears</a>
                </div>
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
                    <a href="#"> <i class="fa-brands fa-instagram"></i> </a>
                    <a href="#"> <i class="fa-brands fa-youtube"></i> </a>
                    <a href="#">  <i class="fa-brands fa-twitter"></i> </a>
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
    <!--jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--custum script-->
    <script src="script.js"></script>
    <!-- slick carousel-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>



</body>
</html>