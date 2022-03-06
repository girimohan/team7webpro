
<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateUser.php");


$table = 'users';

$admin_users = selectAll($table);

$errors = array();
$id = '';
$user_name = '';
$admin = '';
$password = '';


function loginUser($user)
{
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = 'You are now logged in';
    $_SESSION['type'] = 'success';

    if ($_SESSION['admin']) {
        header('location: ' . BASE_URL . '/admin/dashboard.php'); 
    } else {
        header('location: ' . BASE_URL . '/posts/index.php');
    }
    exit();
}