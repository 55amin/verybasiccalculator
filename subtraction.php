<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php
if (!empty($_GET["no1subtract"]) > 0 && !empty($_GET["no2subtract"]) > 0) {
    echo "You have subtracted " . $_GET["no2subtract"] . " from " . $_GET["no1subtract"] . ".\n";
    echo "The answer is " . ($_GET["no1subtract"] - $_GET["no2subtract"]) . ".";
} else {
  echo "You didn't even enter two numbers!";
}
?>

<a href="index.php">Reset</a>
</body>
</html>