<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sign Guest Book</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
<?php
// Rather than follow the Reinforcement Exercise 8.1 exactly,
// This code assumes the guestbook schema and visitors table
// have been created using MySQL Workbench.

if (empty($_POST['first_name']) || empty($_POST['last_name']))
     echo "<p>You must enter your first and last name! Click
           your browser's Back button to return to the Guest
           Book form.</p>";
else {
     $DBConnect = @mysqli_connect('127.0.0.1:3306', 'root');
     if ($DBConnect === FALSE)
          echo "<p>Unable to connect to the database server.</p>"
               . "<p>Error code " . mysqli_connect_errno()
               . ": " . mysqli_connect_error() . "</p>";
     else {
          $DBName = "guestbook";
          if (@mysqli_select_db($DBConnect, $DBName)) {
               
		  $TableName = "visitors";
          
            $LastName = stripslashes($_POST['last_name']);
            $FirstName = stripslashes($_POST['first_name']);
            $SQLstring = "INSERT INTO $TableName VALUES(NULL, '$LastName', '$FirstName')";
            $QueryResult = @mysqli_query($DBConnect, $SQLstring);
               if ($QueryResult === FALSE)
                    echo "<p>Unable to add you to the guest book.</p>"
                       . "<p>Error code " . mysqli_errno($DBConnect)
                       . ": " . mysqli_error($DBConnect) . "</p>";
               else
                    echo "<h1>Thank you for signing our guest book!</h1>";
          }
          mysqli_close($DBConnect);
     }
}
?>

<br><br><br><a href="../index.php">Go Back</a>

</body>
</html>

