<?php include("../../path.php");
include(ROOT_PATH. "/app/controllers/users.php");
adminOnly();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Font Awesome -->
        <!-- <script src="https://kit.fontawesome.com/54c3ca3ad6.js" crossorigin="anonymous"></script>  -->

        <title>Tasty Food | Admin Manage Users </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- custom Styling -->
        <link rel="stylesheet" href="../../assets/css/style.css">

        <!-- custom Styling -->
        <link rel="stylesheet" href="../../assets/css/admin.css">

        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
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
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add User</a>
                <a href="index.php" class="btn btn-big">Manage Users</a>
            </div>


            <div class="content">

                <h2 class="page-title">Manage Users</h2>
                <?php include(ROOT_PATH . "/app/includes/messages.php");?>

                <table>
                    <thead>
                        <th>SN</th>
                        <th>username</th>
                        <th>Email</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                    <?php foreach ($admin_users as $key => $user):?>
                        <tr>
                            <td><?php echo $key + 1;?></td>
                            <td><?php echo $user['username'];?></td>
                            <td><?php echo $user['email'];?></td>
                            <td><a href="edit.php?id=<?php echo $user['id'];?>" class="edit">Edit</a></td>
                            <td><a href="index.php?delete_id=<?php echo $user['id'];?>" class="delete">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>

            </div>

        </div>
        <!-- // Admin COntent -->

      </div>
      <!-- // Page Wrapper -->

  

      <!-- JQuery -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <script src="../../assets/js/scripts.js"></script>
    </body>
</html>