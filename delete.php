<?php

include 'connection.php';

if(isset($_GET['deleteid'])){
    $user_id = $_GET['deleteid'];
    $sql ="delete from users where user_id=$user_id";
    $result = mysqli_query($con, $sql);
    if($result){
        //echo"Deleted";
        header('location:read.php');
    }else{
        die("failed to connnect!");
    }
}
?>
