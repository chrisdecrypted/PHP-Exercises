<?php
$DBConnect = mysqli_connect('127.0.0.1:3306','root');
if (!$DBConnect) {
    die('Could not connect;'.mysqli_connect_error());
}
$sql = 'CREATE DATABASE newsletter';
    if (mysqli_query($DBConnect,$sql)){
        echo "Database newsletter created sucessfully \n";
    } 
    else {
        echo 'Error creating databse: '. mysqli_error($DBConnect). "\n";
    }
?>