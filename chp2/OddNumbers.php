
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Odd Numbers</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>


<?php
   echo "<p>The odd numbers between 1 and 100 are: ";
   $i = 1;
   while ($i <= 100) {
      echo " $i <br>";
      $i = $i + 2;
   }
   echo "</p> end";
?>

<!-- Link to Index -->
<a href="../index.php">Go Back</a>

</body>
</html>