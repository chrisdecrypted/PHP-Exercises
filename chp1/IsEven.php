<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Is Even? 1.6</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>

<h1>Reinforcement Exercise 1.6:</h1>
<?php
	// Create the variable for the value entered
   $EnteredValue =  //  19.31876; 
					// 19;
					 19.676;
					// "19.31876";
					// "19";
					// 20;
					// "xyz";
   
   // Create a new variable and ensure it is numeric.
   $NumericValue = (is_numeric($EnteredValue) ?
         $EnteredValue : (int)$EnteredValue);
     
   // Create a new variable and ensure it is an integer.
   $TestValue = (is_int($NumericValue) ?
         $NumericValue : round($NumericValue));
         
   // Get the remainder after integer division by 2
   $Remainder = $TestValue % 2;
   
   $Result = ($Remainder == 0 ? "even" : "odd");
   
   $DisplayValue = (is_string($EnteredValue) ?
         "&quot;$EnteredValue&quot;" : "$EnteredValue");
	  // "\"$EnteredValue\""; Using the esc sequence, \", will work too.
   
   // Is the $EnteredValue exactly the same in value and type to $TestValue?
   $EnteredDescription = ($EnteredValue === $TestValue ?
         "$TestValue" : "$TestValue (the integer equivalent of $DisplayValue)");
   
   echo "<p>$EnteredDescription is $Result</p>";

?>



    <!-- Link to Index -->
    <a href="../index.php">Go Back</a>
</body>
</html>

