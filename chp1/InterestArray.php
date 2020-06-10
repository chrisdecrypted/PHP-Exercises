<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Interest Array 1.1 </title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>

<h1>Reinforcement Exercise 1.1:</h1>

<?php
// We want to simplify our code and use an array instead of all these individual variables. 
// $InterestRate1 = .0725;
// $InterestRate2 = .0750;
// $InterestRate3 = .0775;
// $InterestRate4 = .0800;
// $InterestRate5 = .0825;
// $InterestRate6 = .0850;
// $InterestRate7 = .0875;

$RatesArray=array(".0725",".0750",".0775",".0800",".0825", ".0850", ".0875");

foreach($RatesArray as $i){

    echo $i;
    echo "<br>";
   }  


?>



 
    <!-- Link to Index -->
    <a href="../index.php">Go Back</a>
</body>
</html>



<!-- 
COPY OF ORIGINAL INSTRUCTIONS 

# Exercise 1-1
In this project, you will create and modify a script that stores interest
rates in an array.
1. Create a new document in your text editor.
2. Type the <!DOCTYPE> declaration, <html> element, header
information, and <body> element. Use the strict DTD and
“Interest Array” as the content of the <title> element.
3. Add the following standard PHP script delimiters to the document
body:
<?php
?>
4. Add the following statements to the script section:
$InterestRate1 = .0725;
$InterestRate2 = .0750;
$InterestRate3 = .0775;
$InterestRate4 = .0800;
$InterestRate5 = .0825;
$InterestRate6 = .0850;
$InterestRate7 = .0875;
5. Using the array() construct, modify the statements you
added in the preceding step so the variables are saved in an
array named $RatesArray. Also, add statements to the program
that display the contents of each array element.
6. Save the document as InterestArray.php in the Projects
directory for Chapter 1, upload the document to the server,
and then validate it with the W3C XHTML Validator. After
the document is valid, open it in your Web browser to see
how it renders.
7. Close your Web browser window.  
-->

