<?php 
$mysql= mysqli_connect('localhost', 'root', 'password', 'php') or die('Connection Error');

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
