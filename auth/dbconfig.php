<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "myphp";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    echo "Database not connected!";
}
