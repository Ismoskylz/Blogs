<?php include("path.php");
include(ROOT_PATH. "/app/controllers/posts.php");

if(isset($_GET['id'])){
$post = selectOne('posts', ['id' => $_GET['id']]);
}
$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Font Awesome -->
        <!-- <script src="https://kit.fontawesome.com/54c3ca3ad6.js" crossorigin="anonymous"></script>  -->

        <title>Testy Food | <?php echo $post['title'] ;?></title>
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

      <!-- Page Wrapper -->
      <div class="page-wrapper">

            <!-- Content -->
            <div class="content clearfix">

                <!-- Main Content Wrapper -->
                <div class="main-content-wrapper">
                <div class="main-content single">
                    <h2 class="post-title"><?php echo $post['title'] ;?></h2>

                    <div class="post-content">
                        <p>
                        Welcome to Tasty Foods where culinary dreams come true! Our dynamic digital platform is your ticket to a world of tantalizing tastes and epicurean adventures.
                        Tasty Foods is a dynamic digital platform that aims to excite taste buds and inspire culinary adventures. 
                        Tasty Foods is a digital food paradise that offers a wide variety of recipes, cooking tips, and culinary delights.
                        <br>
                        <br>
                        It is a hub for food connoisseurs and amateur chefs alike. Tasty Foods allows users to embark on a savory adventure, 
                        exploring a treasure trove of delectable recipes, cooking techniques, and epicurean experiences. The site places a focus on flavor, 
                        creativity, and community. Whether users are excited to share their culinary creations with the world or are looking for inspiration for their next meal, 
                        Tasty Foods offers a lively and engaging environment where food enthusiasts can interact, learn, and enjoy the art of cooking.<br><br>
                        Join our community of food enthusiasts and unleash your inner chef. From sizzling stir-fries to decadent desserts, we've got you covered with mouthwatering recipes and expert tips.
                        Get ready to elevate your cooking game, one delicious dish at a time. Let's turn up the heat and spice up your kitchen with a dash of creativity and a pinch of passion!<br><br>
                        We aim to educate our followers with kitchen tips, Cooking Know-hows and interesting recipes from all over the world.
                        <br><br><br>
                        This site is developed by ISMAIL OPEYEMI OLADEJO.
                        </p>
                    </div>

                </div>
            </div>

                <!-- //Main Content -->

                <!-- SideBar -->
                <div class="sidebar single">

                    <div class="section popular">
                        <h2 class="section-title">Popular Topics</h2>

                        <?php foreach ($posts as $p):?>
                            <div class="post clearfix">
                                <img src="<?php echo BASE_URL . '/assets/img/' . $p['image'];?>" alt="">
                                <a href="" class="title"><h4><?php echo $p['title'] ;?></h4></a>
                            </div>
                        <?php endforeach; ?>

                        


                    </div>

                    <div class="section topics">
                        <h2 class="section-title">Topics</h2>
                        <ul>
                            <?php: foreach ($topics as $topic):?>
                                <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'];?>"><?php echo $topic['name'] ;?></a></li>
                            <?php endforeach; ?>

                        </ul>
                    </div>
                </div>
                <!-- // SideBar -->

            </div>
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