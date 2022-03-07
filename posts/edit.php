<?php include("../path.php"); ?>
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

        <link rel="stylesheet" href="../assets/css/styleblog.css">
        <link rel="stylesheet" href="../assets/css/style.css">


        <title>Admin Section - Edit Post</title>
    </head>

    <body>
        
    <?php include("adminheader.php"); ?>

        <div class="admin-wrapper">

        <?php include("sidebar.php"); ?>

            <div class="admin-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Add Post</a>
                    <a href="index.php" class="btn btn-big">Manage Posts</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Edit Post</h2>

                    <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                    <form action="edit.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <div>
                            <label>Title</label>
                            <input type="text" name="title" value="<?php echo $title ?>" class="text-input">
                        </div>
                        <div>
                            <label>Body</label>
                            <textarea name="body" id="body"><?php echo $body ?></textarea>
                        </div>
                        <div>
                            <label>Image</label>
                            <input type="file" name="image" class="text-input">
                        </div>
                        <div>
                            <label>Topic</label>
                            <select name="topic_id" class="text-input">
                                <option value=""></option>
                                <?php foreach ($topics as $key => $topic): ?>
                                    <?php if (!empty($topic_id) && $topic_id == $topic['id'] ): ?>
                                        <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
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
                            <?php else: ?>
                                <label>
                                    <input type="checkbox" name="published" checked>
                                    Publish
                                </label>
                            <?php endif; ?>
                           

                        </div>
                        <div>
                            <button type="submit" name="update-post" class="btn btn-big">Update Post</button>
                        </div>
                    </form>

                </div>

            </div>


        </div>
 




        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script
            src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
        <script src="../assets/js/scripts.js"></script>
