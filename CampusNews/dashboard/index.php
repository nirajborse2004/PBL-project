<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/82edee0263.js" crossorigin="anonymous"></script>
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"  crossorigin="anonymous">
    <!--CUSTOM STYLING-->
    <link rel="stylesheet" href="/CampusNews/css/style.css">
    <!-- admin style -->
    <link rel="stylesheet" href="/CampusNews/dashboard/admin.css">
    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">


    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- slick carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Custom script -->
    <script src="/CampusNews/js/scripts.js"></script>

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap"rel="stylesheet">

    <title>Admin Section - Manage Posts</title>

</head>
<body>
    <div class="logo">
        <h1 class="logo-text"><span>Trend</span>Cast</h1>
    </div>

    <nav class = "navbar">
        <header>
            <i class="fa-solid fa-bars menue-toggle"></i>
        </header>
    </nav>

    </div>
        <!-- Admin page wrapper-->
        <div class="admin-wrapper">
            <!--left sidebar  -->
            <div class="left-sidebar">
                <div class="profile">
                    <?php
                    include_once 'C:\Users\Lenovo\OneDrive\Desktop\PBL-project\CampusNews\php\registernew.php';
                    echo $unfpg ;
                    ?>
                </div>
            </div>
            <!--/left sidebar  -->

            <!-- admin content -->
            <div class="admin-content">

                <div class="content">
                    <h2 class="page-title">Activity</h2>
                    <table>
                        <thead>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Date</th>
                            <th colspan="3">Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                <?php
                                include_once 'C:\Users\Lenovo\OneDrive\Desktop\PBL-project\CampusNews\dashboard\postinfo.php';
                                // echo $title ;

                                ?>
                                </td>
                                <td>
                                <?php
                                include_once 'C:\Users\Lenovo\OneDrive\Desktop\PBL-project\CampusNews\dashboard\postinfo.php';
                                // echo $body ;

                                ?>
                                </td>
                                <td>
                                <?php
                                include_once 'C:\Users\Lenovo\OneDrive\Desktop\PBL-project\CampusNews\dashboard\postinfo.php';
                                // echo $date ;
                                // exit();
                                ?>
                                </td>
                            </tr>
                            <tr>
                            <td>
                                <?php
                                include_once 'C:\Users\Lenovo\OneDrive\Desktop\PBL-project\CampusNews\dashboard\postinfo.php';
                                // echo $title ;
                                ?>
                                </td>
                                <td>
                                <?php
                                include_once 'C:\Users\Lenovo\OneDrive\Desktop\PBL-project\CampusNews\dashboard\postinfo.php';
                                // echo $body ;
                                ?>
                                </td>
                                <td>
                                <?php
                                include_once 'C:\Users\Lenovo\OneDrive\Desktop\PBL-project\CampusNews\dashboard\postinfo.php';
                                // echo $date ;
                                ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="button-group">
                    <a href="create.html" class="btn btn-big">Add Posts</a>
                    <a href="index.html" class="btn btn-big">Posts Status</a>
                </div>
            </div>
            <!-- admin content -->
        </div>
        <!-- /page  wrapper -->
</body>
</html>

