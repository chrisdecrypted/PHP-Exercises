
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Validate Local Address</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
<h1>Reinforcement Exercise 3.3:</h1>

<h1>Validate Local Address</h1><hr />
<?php 
    $email = array(
    "jsmith123@example.org",
    "john.smith.mail@example.org",
    "john.smith@example.org",
    "john.smith@example",
    "jsmith123@mail.example.org");
    
    foreach ($email as $emailAddress){
        echo "The email address &ldquo;" . $emailAddress .
        "&rdquo; ";
        if (preg_match("/^(([A-Za-z]+\d+)|" .
        "([A-Za-z]+\.[A-Za-z]+))" .
        "@((mail\.)?)example\.org$/i",
        $emailAddress)==1)
        echo " is a valid e-mail address. <br>";
        else
        echo " is not a valid e-mail address. <br>";
        }
        
?>
<br><br><br><a href="../index.php">Go Back</a>

</body>
</html>