<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php
if (!empty($_GET["no1divide"]) > 0 && !empty($_GET["no2divide"]) > 0) {
    echo "You have divided " . $_GET["no1divide"] . " by " . $_GET["no2divide"] . ".\n";
    echo "The answer is " . ($_GET["no1divide"] / $_GET["no2divide"]) . ".";
} else {
  echo "You didn't even enter two numbers!";
}
?>

<a href="index.php">Reset</a>
</body>
</html>