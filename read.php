<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
   
  </head>
  <body>
        <?php
        include 'header.php';
        ?>
        
        <?php
        //session_start();
        include("connection.php");
        include("functions.php");

        $mysqli = new mysqli('db', 'root', 'password', 'signup') or die(mysqli_error($mysqli));
         $result = $mysqli->query("SELECT * FROM users ") or die($mysqli-> error);
        ?>
       
       <div class="container">
           <h2>Collection of user data</h2>
         <div class="row justify-content-center">
           <table class="table">
              <thead>
                <tr>
                  <th>User ID</th>
                  <th>User Name</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th colspan="2">Action</th>
                </tr>
              </thead>
              <?php
              while($row = $result->fetch_assoc()): ?>
                <tr>
                  <td><?php echo $row['user_id']; ?></td>
                  <td><?php echo $row['user_name']; ?></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['address']; ?></td>
                  <td>
                    <a href="read.php?edit = <?php echo $row['user_id']; ?>"
                    class="btn btn-info">Edit</a>
                    <a href="read.php?delete = <?php echo $row['user_id']; ?>"
                    class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <?php endwhile; ?>
           </table>

         </div>
                <div>
                <p><a href='index.php'>Back to Home page</a></p>
                </div>
         <?php

         pre_r($result->fetch_assoc());
         pre_r($result->fetch_assoc());

         function pre_r($array){
             echo '<pre>';
             print_r($array);
            echo'</pre>';       
            }

      ?>




        <!--
      <div class="row justify-content-center">
      <form action="process.php" method = "POST">
        <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class = "form-control" placeholder = "Enter your name:">
        </div>
        
        <div class="form-group">
        <label>Location</label>
        <input type="text" name="location" class = "form-control" placeholder = "Enter your location:">
        </div>
        
        <div class="form-group">
        <button type="submit" class ="btn btn-primary" name="save">Save</button>
        </div>

      </form>
      </div>-->
      </div>
    </body>
</html>
<?php
        include 'footer.php';
        ?>