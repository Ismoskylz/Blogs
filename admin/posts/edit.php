<?php include("../../path.php");?>
<?php include(ROOT_PATH. "/app/controllers/posts.php");
adminOnly();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Font Awesome -->
        <!-- <script src="https://kit.fontawesome.com/54c3ca3ad6.js" crossorigin="anonymous"></script>  -->

        <title>Tasty Food | Admin Edit post</title>
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
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add Recipes Post</a>
                <a href="index.php" class="btn btn-big">Manage Recipes Post</a>
            </div>


            <div class="content">

                <h2 class="page-title">Edit Recipes Post</h2>
                <?php include(ROOT_PATH. "/app/helpers/formErrors.php");?>


                <form action="edit.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                    <div>
                        <label>Title</label>
                        <input type="text" name="title" value="<?php echo $title ?>" class="text-input">
                    </div>
                    <div>
                        <label>Body</label>
                        <textarea name="body" id="editor"><?php echo $body ?></textarea>
                    </div>
                    <div>
                        <label>Image Upload</label>
                        <input type="file" name="image" class="text-input">
                    </div>
                    <div>
                        <label>Select Recipes</label>
                        <select name="topic_id" class="text-input">
                            <option value="">Select Recipes</option>
                           
                            <?php foreach ($topics as $key => $topic): ?>
                                <?php if (!empty($topic_id) && $topic_id == $topic['id']): ?>
                                    <option selected value="<?php echo $topic['id'];?>"><?php echo $topic['name'];?></option>
                                    
                                <?php else: ?>
                                    <option value="<?php echo $topic['id'];?>"><?php echo $topic['name'];?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            
                        </select>
                    </div>
                    <div>
                        <?php if (empty($published) && $published == 0): ?> 
                            <label>
                            <input type="checkbox" name="published">
                            Publish
                        </label> 
                        <?php else:?>
                            <label>
                            <input type="checkbox" name="published" checked>
                            Publish
                        </label>
                        <?php endif; ?>
                    </div>
                    <div>
                        <button type="submit" name="update-post" class="btn btn-big">Update Recipes Post</button> 
                    </div>
                </form>

            </div>

        </div>
        <!-- // Admin COntent -->

      </div>
      <!-- // Page Wrapper -->

  

      <!-- JQuery -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <!-- script for body text -->
    
      <!-- ..body text -->

      <script src="../../assets/js/scripts.js"></script>
    </body>
</html>