<?php 
include("path.php");
include(ROOT_PATH. "/app/controllers/users.php");
guestOnly();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tasty Foods | Register</title>
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

      <div class="auth-content">
        <form action="register.php" method="post">
            <h2 class="form-title">Register</h2>


            <?php include(ROOT_PATH. "/app/helpers/formErrors.php");?>

            <div>
                <label for="">Username</label>
                <input type="text" name="username" value="<?php echo $username;?>" class="text-input">
            </div>
            <div>
                <label for="">Email</label>
                <input type="email" name="email" value="<?php echo $email;?>" class="text-input">
            </div>
            <div>
                <label for="">Password</label>
                <input type="password" name="password" value="<?php echo $password;?>" class="text-input">
            </div>
            <div>
                <label for="">Confirm Password</label>
                <input type="password" name="passwordConf" value="<?php echo $passwordConf;?>" class="text-input">
            </div>
            <div>
                <button type="submit" class="btn btn-big" name="register-btn">Register</button>
            </div>
            <p>Or <a href="<?php echo BASE_URL . '/login.php'?>">Sign In</a></p>
        </form>
      </div>

      
      <!-- JQuery -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <!-- Slick Carousel -->
      <script type="text/javascript" src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


       <!-- Slick Carousel -->

      <script src="assets/js/scripts.js"></script>
    </body>
</html>