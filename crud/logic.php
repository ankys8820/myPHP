
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