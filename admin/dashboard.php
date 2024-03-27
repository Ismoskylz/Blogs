<?php include("../path.php");?>
<?php include(ROOT_PATH. "/app/controllers/users.php");
adminOnly();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Font Awesome -->
        <!-- <script src="https://kit.fontawesome.com/54c3ca3ad6.js" crossorigin="anonymous"></script>  -->

        <title>Tasty Food | Admin Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- custom Styling -->
        <link rel="stylesheet" href="../assets/css/style.css">

        <!-- custom Styling -->
        <link rel="stylesheet" href="../assets/css/admin.css">

        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
        <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    </head>
    <body>
      <!-- HEADER FILES -->
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php" );?>
      <!-- //HEADER FILES -->

      <!-- Admin Page Wrapper -->
      <div class="admin-wrapper">

        <!-- Left SideBar -->
        <?php include(ROOT_PATH . "/app/includes/adminSideBar.php" );?>
        <!-- // Left SideBar -->

        <!-- Admin Content -->
        <div class="admin-content">

            <div class="content">

                <h2 class="page-title">Admin Dashboard</h2>

                <?php include(ROOT_PATH . '/app/includes/messages.php')?>


            </div>

        </div>
        <!-- // Admin COntent -->

      </div>
      <!-- // Page Wrapper -->

  

      <!-- JQuery -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <!-- script for body text -->
    
      <!-- ..body text -->

      <script src="../assets/js/scripts.js"></script>
    </body>
</html>