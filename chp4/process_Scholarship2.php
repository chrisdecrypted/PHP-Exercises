<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Scholarship Form</title>
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>

<body>
  <?php
    $firstName = stripslashes($_POST['fName']);
    $lastName  = stripslashes($_POST['lName']);
    echo "Thank you for filling out the scholarship form, ".
                                                 $firstName.
											            " ".
											      $lastName. 
											            ".";
  ?>
</body>
</html>

