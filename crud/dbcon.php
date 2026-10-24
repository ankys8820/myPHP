<?php

$conn = mysqli_connect("localhost","root","","test");

if(!$conn){
    die('Conncetion Failed'.mysqli_connect_error());
}
