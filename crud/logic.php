
<?php
session_start();
require 'dbcon.php';

if(isset($_POST["save-user"])){
    // $name= mysqli_real_escaoe_string($conn,$POST['name']);
    // $email= mysqli_real_escaoe_string($conn,$POST['email']);
    // $mobile= mysqli_real_escaoe_string($conn,$POST['mobile']);
    // $city= mysqli_real_escaoe_string($conn,$POST['city']);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];

    $query = "INSERT INTO users (name,	email,	mobile,	city) VALUES ('$name','$email','$mobile','$city')";

    $query_run = mysqli_query($conn,$query);

    if($query_run){
        $_SESSION['message'] = "User created successfully!";
        header("Location: index.php");
        // header("Location: index.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Something went wrong !";
        header("Location: add.php");
        exit(0);
    }

}

if(isset($_POST["update-user"])){


    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];

    $query = "UPDATE users SET name='$name', email='$email', mobile='$mobile', city= '$city' WHERE id='$user_id'";

    $q_run = mysqli_query($conn, $query);

    if($q_run){
        $_SESSION['message'] = "User updated successfully!";
        header("Location: index.php");
        exit(0);
    }
     else{
        $_SESSION['message'] = "Something went wrong !";
        header("Location: edit.php");
        exit(0);
    }
}

if(isset($_POST['del_user'])){
    $user_id=$_POST['user_id'];

    $query = "DELETE FROM users WHERE id='$user_id'";

    $q_run = mysqli_query($conn, $query);

    if($q_run){
        $_SESSION['message'] = "User deleted successfully!";
        header("Location: index.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Something went wrong !";
        header("Location: index.php");
        exit(0);
    }
}