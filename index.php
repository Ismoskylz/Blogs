<?php
include("path.php"); 
include(ROOT_PATH. "/app/controllers/topics.php");

$post = array();
$postTitle = 'Recent Posts';

if(isset($_GET['t_id'])) {
    $posts = getPostsByTopicId($_GET['t_id']);
    $postTitle ="You searched for posts under '" . $_GET['name'] . "'";
}else if (isset($_POST['search-term'])) {
    $postTitle ="You searched for '" . $_POST['search-term'] . "'";
   $posts = searchPosts($_POST['search-term']);
}else{
    $posts = getPublishedPosts();
}

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Font Awesome -->
        <!-- <script src="https://kit.fontawesome.com/54c3ca3ad6.js" crossorigin="anonymous"></script>  -->

        <title>Tasty Foods</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- custom Styling -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    </head>
    <body>
      <!-- HEADER FILES -->
      <?php include(ROOT_PATH. "/app/includes/header.php");?>
      
      <!-- //HEADER FILES -->

      <?php include(ROOT_PATH. "/app/includes/messages.php");?>
      <!-- Page Wrapper -->
      <div class="page-wrapper">
        
        <!-- Post SLider -->
        <div class="post-slider">
            <h1 class="slider-title">Trending Recipes Posts</h1>
            <i class="fa fa-chevron-left prev" aria-hidden="true"></i>
            <i class="fa fa-chevron-right next" aria-hidden="true"></i>

            <div class="post-wrapper">
                <?php foreach ($posts as $post): ?>
                    <div class="post">
                        <img src="<?php echo BASE_URL . '/assets/img/' . $post['image'];?>" alt="" class="slider-image">
                        <div class="post-info">
                            <h4><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h4>
                            <i class="fa fa-user" aria-hidden="true"> <?php echo $post['username']; ?></i>
                            &nbsp;
                            <i class="fa fa-calendar" aria-hidden="true">&nbsp; <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                        </div>
                    </div>
                <?php endforeach;?>
            
            </div>
        </div>
        <!--// Post SLider -->

        <!-- Content -->
        <div class="content clearfix">
            <div class="main-content">
                <h1 class="recent-post-title"><?php echo $postTitle; ?></h1>

                <?php foreach ($posts as $post): ?>
                    <div class="post clearfix">
                        <img src="<?php echo BASE_URL . '/assets/img/' . $post['image'];?>" alt="" class="post-image">
                        <div class="post-preview">
                            <h3><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h3>
                            <i class="fa fa-user" aria-hidden="true"> <?php echo $post['username']; ?></i>
                            &nbsp;
                            <i class="fa fa-calendar" aria-hidden="true">&nbsp;<?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                            <p class="preview-text">
                            <?php echo html_entity_decode(substr($post['body'], 0, 150) . '....'); ?>
                            </p>
                            <a href="single.php?id=<?php echo $post['id']; ?>" class="btn read-more">Read More</a>
                        </div>
                    </div>
                <?php endforeach;?>

            </div>
            <div class="sidebar">
                <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="index.php" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Search...">
                    </form>
                </div>


                <div class="section topics">
                    <h2 class="section-title">Recipes</h2>
                    <ul>
                    <?php foreach ($topics as $key => $topic):?>
                        <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'];?>"><?php echo $topic['name'] ;?></a></li>
                    <?php endforeach;?>
                    
                    </ul>
                </div>
            </div>
        </div>
        <!-- // Content -->

      </div>
      <!-- // Page Wrapper -->

      <!-- FOOTER -->
      <?php include(ROOT_PATH. "/app/includes/footer.php");?>
      <!-- //FOOTER -->

      <!-- JQuery -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <!-- Slick Carousel -->
      <script type="text/javascript" src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


       <!-- Slick Carousel -->

      <script src="assets/js/scripts.js"></script>
    </body>
</html>