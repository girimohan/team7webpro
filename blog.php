
<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");

$posts = array();
$postsTitle = 'Recent Posts';

if (isset($_GET['t_id'])) {
  $posts = getPostsByTopicId($_GET['t_id']);
  $postsTitle = "You searched for posts under '" . $_GET['name'] . "'";
} else if (isset($_POST['search-term'])) {
  $postsTitle = "You searched for '" . $_POST['search-term'] . "'";
  $posts = searchPosts($_POST['search-term']);
} else {
  $posts = getPublishedPosts();
}

?>


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/styleblog.css">

  <title>Blog</title>
</head>

<body>



<?php include("header.php"); ?>


<main>  

 <h1 class="heading">
                OLYMPIA GYM BLOG</h1>
        
  <!-- Page Wrapper -->
  <div class="container">
  <article class="naya">
           
        <p class="para"> 
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Euismod in pellentesque massa placerat duis. Enim sit amet venenatis urna cursus eget nunc. Aenean euismod elementum nisi quis eleifend. Sed sed risus pretium quam vulputate dignissim suspendisse in. Etiam non quam lacus suspendisse faucibus interdum posuere lorem. Egestas congue quisque egestas diam in arcu. Lorem sed risus ultricies tristique. Cursus euismod quis viverra nibh cras pulvinar. Magna sit amet purus gravida quis blandit. Consequat nisl vel pretium lectus quam id. Nulla aliquet enim tortor at auctor urna nunc. Arcu odio ut sem nulla pharetra.        
        </p>
    </article>
    <!-- Post Slider -->
    <div class="col-xs-12">
          <h2 class="heading_latest"> Latest posts </h2>
      

      <div class="row">
        <div class="column2">
        <?php foreach ($posts as $post): ?>
          <div class="post">
            <style>
                  .post-slider {
                    position: relative;
                  }
                  

                  .post {
                    width: 300px;
                    height: 330px;
                    margin: 0px 10px;
                    display: inline-block;
                    background: white;
                    border-radius: 5px;
                    box-shadow: 1rem 1rem 1rem -1rem #a0a0a033;
                  }
                  
                  .post-info {
                    height: 130px;
                    padding: 0px 5px;
                  }
                  
                  .slider-image {
                    width: 100%;
                    height: 200px;
                    border-top-left-radius: 5px;
                    border-top-right-radius: 5px;
                  }
  </style>
            <img src="<?php echo BASE_URL . '/html-website/images/' . $post['image']; ?>" alt="" class="slider-image">
            <div class="post-info">
              <h4><a style="color: black" href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h4>
              <i class="far fa-user"> <?php echo $post['username']; ?></i>
              &nbsp;
              <i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
              </div>
              
        </div>
        <?php endforeach; ?>
                </div>
        
        

      

      
    
    <!-- // Post Slider -->


    <div class="content clearfix">

      <!-- Main Content -->
      <div class="main-content">
        <h1 class="recent-post-title"><?php echo $postsTitle ?></h1>

        <?php foreach ($posts as $post): ?>
          <div class="post clearfix">
            <img src="<?php echo BASE_URL . '/html-website/images/' . $post['image']; ?>" alt="" class="post-image">
            <div class="post-preview">
              <h2><a style="color: black" href="single.php?id= <?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h2>
              <i class="far fa-user"> <?php echo $post['username']; ?></i>
              &nbsp;
              <i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
              <p class="preview-text">
                <?php echo html_entity_decode(substr($post['body'], 0, 100) . '...'); ?>
              </p>
              <a href="single.php?id=<?php echo $post['id']; ?>" class="btn read-more">Read More</a>
            </div>
          </div>    
        <?php endforeach; ?>
        


      </div>
      <!-- // Main Content -->

      <div class="sidebar">

        <div class="section search">
          <h2 class="section-title">Search</h2>
          <form action="blog.php" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Search...">
          </form>
        </div>


        <div class="section topics">
          <h2 class="section-title">Topics</h2>
          <ul>
            <?php foreach ($topics as $key => $topic): ?>
              <li><a href="<?php echo BASE_URL . '/blog.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>

      </div>

    </div>


  </div>
  

<?php
include("footer.php");
?>