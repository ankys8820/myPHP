<?php

require 'dbconfig.php';

if (isset($_POST['signup'])) {

    // echo "Signup form submitted.";
    $uname = $_POST['username'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    // echo "Username :" . $uname;
    // echo "</br>";
    // echo "email :" . $email;
    // echo "</br>";
    // echo "Password :" . $password;

    $query = "INSERT INTO `auth` (`username`,`email`,`password`) VALUES ('$uname','$email','$password')";

    $q_run = mysqli_query($conn, $query);

    if ($q_run) {
        header('Location: signin.php');
        echo "User created successfully!";
        exit(0);
    } else {
        echo "Somthing went wrong!";
        exit(0);
    }
}

if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    // echo "email :" . $email;
    // echo "</br>";
    // echo "Password :" . $password;

}
