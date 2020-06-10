
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Jumble Maker</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
<h1>Reinforcement Exercise 4.1:</h1>

<?php
function displayError($fieldName, $errorMsg) {
    global $errorCount;
    echo "Error for \"$fieldName\": $errorMsg<br />\n";
    ++$errorCount;
    }

function validateWord($data, $fieldName) {
    global $errorCount;
    if (empty($data)) {
    displayError($fieldName,"This field is
    required");
    $retval = "";
    } else { // Only clean up the input if it isn't
    // empty
    $retval = trim($data);
    $retval = stripslashes($retval);
    if ((strlen($retval)<4) ||
    (strlen($retval)>7)) {
    displayError($fieldName,"Words must be
    at least four and at most
    seven letters long");
    }
    if (preg_match("/^[a-z]+$/i",$retval)==0) {
    displayError($fieldName,"Words must be
    only letters");
    }
    }
    $retval = strtoupper($retval);
    $retval = str_shuffle($retval);
    return($retval);
    }

    $errorCount = 0;
    $words = array();

    $words[] = validateWord($_POST['Word1'], "Word 1");
    $words[] = validateWord($_POST['Word2'], "Word 2");
    $words[] = validateWord($_POST['Word3'], "Word 3");
    $words[] = validateWord($_POST['Word4'], "Word 4");

    if ($errorCount>0)
    echo "Please use the \"Back\" button to
    re-enter the data.<br />\n";
    else {
    $wordnum = 0;
    foreach ($words as $word)
    echo "Word ".++$wordnum.": $word<br />\n";
}
?>

<br><br><br><a href="../index.php">Go Back</a>

</body>
</html>