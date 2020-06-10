<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Guest Book Posts</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>

<body>
    <h1>Reinforcement Exercise 8.2</h1>
    <?php
$DBConnect = @mysqli_connect('127.0.0.1:3306', 'root');
if ($DBConnect === FALSE)
     echo "<p>Unable to connect to the database server.</p>"
        . "<p>Error code " . mysqli_errno($DBConnect)
        . ": " . mysqli_error($DBConnect) . "</p>";
else {
     $DBName = "guestbook";
     if (!@mysqli_select_db($DBConnect, $DBName))
          echo "<p>Cannot open the guestbook database schema!</p>";
     else {
          $TableName = "visitors";
          $SQLstring = "SELECT * FROM $TableName";
          $QueryResult = @mysqli_query($DBConnect, $SQLstring);
          if (mysqli_num_rows($QueryResult) == 0)
               echo "<p>There are no entries in the guest book!</p>";
          else {
               echo "<p>The following visitors have signed our guest book:</p>";
               echo "<table width='100%' border='1'>";
               echo "<tr><th>First Name</th><th>Last Name</th></tr>";
               while ($Row = mysqli_fetch_assoc($QueryResult)) {
                    echo "<tr><td>{$Row['first_name']}</td>";
                    echo "<td>{$Row['last_name']}</td></tr>";
               }
          }
          mysqli_free_result($QueryResult);
     }
     mysqli_close($DBConnect);
}
?>
</table>
<br><br><br><a href="../index.php">Go Back</a>


</body>
</html>