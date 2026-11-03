<?php

require 'dbconfig.php';
session_start();

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

    $query = "INSERT INTO `users` (`username`,`email`,`password`) VALUES ('$uname','$email','$password')";

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

    // echo "email : " . $email;
    // echo "</br>";
    // echo "Password :" . $password;

    // echo "Loging Pressed";

    // echo "</br>";

    $sql = "SELECT id,username,email,is_Admin FROM users WHERE email = '$email' AND password='$password'";



    $res = mysqli_query($conn, $sql) or die("Query Failed!");

    if (mysqli_num_rows($res) > 0) {

        while ($row = mysqli_fetch_assoc($res)) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['is_Admin'] = $row['is_Admin'];

            header('Location: index.php');
            exit();

            // echo $_SESSION['username'];
        }
    } else {
        echo '<div>Invalid Credentials.</div>';
    }
}

if (isset($_POST['logout'])) {
    // echo "Logout pressed";
    session_unset();
    session_destroy();
    header('Location: signin.php');
}
