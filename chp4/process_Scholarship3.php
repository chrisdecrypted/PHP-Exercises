<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Scholarship Form</title>
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>

<body>
<?php
  function displayRequired($fieldName) {
     echo "The field \"$fieldName\" is required.<br />\n";
  } 
  function validateInput($data, $fieldName) {
     global $errorCount;
     if (empty($data)) {
          displayRequired($fieldName);
          ++$errorCount;
          $retval = "";
     } else { // Only clean up the input if it isn't empty
          $retval = trim($data);
          $retval = stripslashes($retval);
     }
     return($retval);
  }
  
  $errorCount = 0;
  $firstName = validateInput($_POST['fName'], "First name");
  $lastName  = validateInput($_POST['lName'], "Last name");

  if ($errorCount>0) 
     echo "Please use the \"Back\" button to re-enter the 
          data.<br />\n";
  else
     echo "Thank you for filling out the scholarship form, ".
                                                  $firstName.
											             " ".
											       $lastName. 
											             ".";
?>
</body>
</html>

