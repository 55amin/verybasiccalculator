<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php
if (!empty($_GET["no1multiply"]) > 0 && !empty($_GET["no2multiply"]) > 0) {
    echo "You have multiplied " . $_GET["no1multiply"] . " by " . $_GET["no2multiply"] . ".\n";
    echo "The answer is " . ($_GET["no1multiply"] * $_GET["no2multiply"]) . ".";
} else {
  echo "You didn't even enter two numbers!";
}
?>

<a href="index.php">Reset</a>
</body>
</html>