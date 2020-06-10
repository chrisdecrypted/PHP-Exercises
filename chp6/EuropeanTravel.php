
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>European Travel</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>

<h1>Reinforcement Exercise 6.3: </h1>

<?php

$Distances = array(
    "Berlin" => array(
    "Berlin" => 0,
    "Moscow" => 1607.99,
    "Paris" => 876.96,
    "Prague" => 280.34,
    "Rome" => 1181.67
    ),
    "Moscow" => array(
    "Berlin" => 1607.99,
    "Moscow" => 0,
    "Paris" => 2484.92,
    "Prague" => 1664.04,
    "Rome" => 2374.26
    ),
    "Paris" => array(
    "Berlin" => 876.96,
    "Moscow" => 641.31,
    "Paris" => 0,
    "Prague" => 885.38,
    "Rome" => 1105.76
    ),
    "Prague" => array(
    "Berlin" => 280.34,
    "Moscow" => 1664.04,
    "Paris" => 885.38,
    "Prague" => 0,
    "Rome" => 922
    ),
    "Rome" => array(
    "Berlin" => 1181.67,
    "Moscow" => 2374.26,
    "Paris" => 1105.76,
    "Prague" => 922,
    "Rome" => 0
    )
);

    $KMtoMiles = 0.62;

    if (isset($_POST['submit'])) {
        $StartIndex = stripslashes($_POST['Start']);
        $EndIndex = stripslashes($_POST['End']);
        if (isset(
        $Distances[$StartIndex][$EndIndex]))
        echo "<p>The distance from $StartIndex
        to $EndIndex is " .
        $Distances[$StartIndex][$EndIndex]
        . " kilometers, or " . round(
        ($KMtoMiles *
        $Distances[$StartIndex][$EndIndex]),
        2) . " miles.</p>\n";
        else
        echo "<p>The distance from $StartIndex
        to $EndIndex is not in the
        array.</p>\n";
        }

?>

<form action="EuropeanTravel.php" method="post">
<p>Starting City: <select name="Start">
    <?php
    foreach ($Distances as
    $City => $OtherCities) {
    echo "<option value='$City'";
    if (strcmp($StartIndex,$City)==0)
    echo " selected";
    echo ">$City</option>\n";
    }
    ?>
</select></p>

<p>Ending City: <select name="End"><?php
foreach ($Distances as
$City => $OtherCities) {
echo "<option value='$City'";
if (strcmp($EndIndex,$City)==0)
echo " selected";
echo ">$City</option>\n";
}
?>
</select></p>
<p><input type="submit" name="submit" value="Calculate Distance" /></p>
</form>

<br><br><br><a href="../index.php">Go Back</a>

</body>
</html>