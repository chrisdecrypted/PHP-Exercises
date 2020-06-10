<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Single Family Home 1.3</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>

<h1>Reinforcement Exercise 1.3:</h1>

<?php
$SingleFamilyHome=399500;
$SingleFamilyHome_Print = number_format($SingleFamilyHome, 1);
$SingleFamilyHome_Display = number_format($SingleFamilyHome, 2);

echo "<p>The current median price of a single family
home in Pleasanton, CA is
$$SingleFamilyHome_Display.</p>

<p>The exercise suggests using a third variable called print, but it is unclear what it wants you to do with this value. I decided to display it to with a '1' instead of a '2' in the 'decimal' space. This is what it looks like $$SingleFamilyHome_Print</p>";
?>

<!-- Link to Index -->
<a href="../index.php">Go Back</a>

</body>
</html>









<!-- # Exercise 1-3
You use the number_format() function when you want to format
the appearance of a number. Th e number_format() function
adds commas that separate thousands and determines the number
of decimal places to display. You can pass two arguments to the
number_format() function: Th e fi rst argument represents the literal
number or variable you want to format, and the second argument
determines the number of decimal places to display. If you exclude
the second argument, the number is formatted without decimal
places.
In this project, you will create a script that demonstrates how to use
the number_format() function.
1. Create a new document in your text editor.
2. Type the <!DOCTYPE> declaration, <html> element, header
information, and <body> element. Use the strict DTD and
“Single Family Home” as the content of the <title> element.
3. Add the following standard PHP script delimiters to the document
body:
<?php
?>
4. Add the following statements to the script section. Th e
fi rst statement assigns an integer value to a variable named
$SingleFamilyHome. Th e second statement then formats
the value in the $SingleFamilyHome variable and assigns the
formatted number to the $SingleFamilyHome_Print variable.
The number in the $SingleFamilyHome_Print variable
will include a comma that separates the thousands and will
include two decimal places. Th e final statement displays the
formatted number on the screen.
$SingleFamilyHome = 399500;
$SingleFamilyHome_Display =
number_format($SingleFamilyHome, 2);
echo "<p>The current median price of a single family
home in Pleasanton, CA is
$$SingleFamilyHome_Display.</p>";
5. Save the document as SingleFamilyHome.php in the
Projects folder for Chapter 1, upload the document to the
server, and then validate it with the W3C XHTML Validator.
After the document is valid, close it in your text editor, and
then open it in your Web browser to see how it renders. You
should see the text “Th e current median price of a single family
home in Pleasanton, CA is $399,500.00.” displayed on the
screen.
6. Close your Web browser window. -->
