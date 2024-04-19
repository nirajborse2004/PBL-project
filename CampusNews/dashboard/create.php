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
    <link rel="stylesheet" href="/CampusNews/css/admin.css">
    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">



    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap"rel="stylesheet">

    <title>Admin Section -Add Posts</title>
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
                <div class="button-group">
                    <a href="create.html" class="btn btn-big">Add Posts</a>
                    <a href="index.html" class="btn btn-big">Manage Posts</a>
                </div>
                <div class="content">
                    <h2 class="page-title">Manage Posts</h2>
                    <form action="/CampusNews/admin/posts/post.php" method="post" enctype="multipart/form-data">
                        <div>
                            <h3><label>Title</label></h3>
                            <input type="text" name="title" class="text-input">
                        </div>
                        <div>
                            <h3><label>Body</label></h3>
                            <input type="text" name="body" class="text-input">
                        </div>
                        <div>
                            <h3><label>Main Body</label></h3>
                            <input type="text" name="main_body" class="text-input">
                        </div>
                        <div>
                            <h3>Upload Image</h3>
                            <input type="file" name="image" class="text-input">
                        </div>
                        <input type="submit" name="submit" value="Add Post" class="btn btn-big">
                    </form>
                </div>
            </div>
            <!-- admin content -->
        </div>
        <!-- /page  wrapper -->

        <!-- JQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <script src="/CampusNews/ckeditor/ckeditor5-build-classic/ckeditor.js"></script>

        <!-- Custom script -->
        <script src="/CampusNews/js/scripts.js"></script>
</body>
</html>
