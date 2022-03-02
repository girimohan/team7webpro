
        
<?php
error_reporting(0);
include 'header.php';
include("connection.php");
include("functions.php");
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
        $sql= "select * from users";
        $result= mysqli_query($con, $sql);
        if($result){
          while($row= mysqli_fetch_assoc($result)){
            $user_id =$row['user_id'];
            $user_name =$row['user_name'];
            $name =$row['name'];
            $email =$row['email'];
            $address =$row['address'];
            echo '<tr>
            <th scope ="row">'.$user_id.'</th>
            <td>'.$user_name.'</td>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$address.'</td>
            <td>
            <button class="btn btn-info"><a class="text-light" href="update.php?updateid='.$user_id.'">Update</a></button>
            <button class = "btn btn-danger"><a class="text-light" href= "delete.php?deleteid='.$user_id.'" >Delete</a></button>
            </td>
            </tr>';

          }
        }
      ?>
      
    </table>
  </div>
  <div>
  <p><a href='index.php'>Back to Home page</a></p>
  </div>
</div>

<?php
include 'footer.php';
?>