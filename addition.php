<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php
if (!empty($_GET["no1add"]) > 0 && !empty($_GET["no2add"]) > 0) {
    echo "You have added " . $_GET["no1add"] . " to " . $_GET["no2add"] . ".\n";
    echo "The answer is " . ($_GET["no1add"] + $_GET["no2add"]) . ".";
} else {
  echo "You didn't even enter two numbers!";
}
?>

<a href="index.php">Reset</a>
</body>
</html>