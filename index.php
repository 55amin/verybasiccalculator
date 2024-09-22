<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

  <form action="addition.php" method="get">
  <h3>Addition</h3>
  First Number: <input type="number" name="no1add"><br>
  Second Number: <input type="number" name="no2add"><br>
  <button type="submit">Add</button><br>
  </form>

  <form action="division.php" method="get">
  <h3>Division</h3>
  First Number: <input type="number" name="no1divide"><br>
  Second Number: <input type="number" name="no2divide"><br>
  <button type="submit">Divide</button><br>
  </form>

  <form action="subtraction.php" method="get">
  <h3>Subtraction</h3>
  First Number: <input type="number" name="no1subtract"><br>
  Second Number: <input type="number" name="no2subtract"><br>
  <button type="submit">Subtract</button><br>
  </form>

  <form action="multiplication.php" method="get">
  <h3>Multiplication</h3>
  First Number: <input type="number" name="no1multiply"><br>
  Second Number: <input type="number" name="no2multiply"><br>
  <button type="submit">Multiply</button><br>
  </form>

  <a href="index.php">Reset</a>

</body>
</html>