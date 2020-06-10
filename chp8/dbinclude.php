<?php
    $DBName = "newsletter";
    $DBConnect = @mysqli_connect('127.0.0.1:3306', 'root');
    if ($DBConnect === FALSE)
    echo "<p>Connection error: ". mysqli_connect_error() . "</p>\n";
    else {
        if (@mysqli_select_db($DBConnect, $DBName) === FALSE) {
            echo "<p>Could not select the \"$DBName\" " ."database: " . mysqli_error($DBConnect) . "</p>\n";
    mysqli_close($DBConnect);
    $DBConnect = FALSE;
        }
    }
?>