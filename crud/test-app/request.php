<?php

require('db.php');

if (isset($_POST['add-user'])) {
    $user =  $_POST['user'];
    $query = "INSERT INTO `username` (`user`) VALUES ('$user')";

    $q_run = mysqli_query($conn, $query);

    if ($q_run) {
        header('Location: index.php');
        echo "Row added successfully!";
    } else {
        header('Location: request.php');
        echo "something error!";
    }
}

if (isset($_POST['delete-user'])) {
    $uid = $_POST['user_id'];

    $query = "DELETE FROM username WHERE `id` = '$uid' ";

    $q_run = mysqli_query($conn, $query);
    if ($q_run) {
        header('Location: index.php');
    } else {
        echo "something error!";
    }
}

if (isset($_POST['update_user'])) {
    // echo " Edit Form Submitted!";
    $uid = $_POST['uid'];
    $uname = $_POST['user'];

    $query = "UPDATE username SET user='$uname' WHERE id='$uid'";

    $q_run = mysqli_query($conn, $query);

    if ($q_run) {
        header("Location: index.php");
        exit(0);
    } else {
        header("Location: edit.php");
        exit(0);
    }
}
