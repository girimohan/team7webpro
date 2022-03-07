<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); 

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">


        <link rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
            crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Candal|Lora"
            rel="stylesheet">

        <link rel="stylesheet" href="assets/css/style.css">

  

        <title>Dashboard</title>
    </head>

    <body>
        
    <?php include("header.php"); ?>

        <div class="admin-wrapper">

        <?php include(ROOT_PATH . "/posts/sidebar.php"); ?>



            <div class="admin-content">

                <div class="content">

                    <h2 class="page-title">Dashboard <br> </h2>
                    <br>
                    

                    <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>

                    

                </div>

            </div>


        </div>
   

        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script
            src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>

        <script src="assets/js/scripts.js"></script>

