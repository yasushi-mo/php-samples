<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>PHP Samples</title>
</head>
<body>
  <h1>PHP Samples</h1>
  <p>Hello PHP!</P>

  <?php include "process.php" ?>

  <form method="POST" action="">
    <div class="button-row"> 
      <input type="submit" name="search" value="search">
    </div>
  </form>

  <form method="POST" action="">
    <div class="form-row">
      <div class="form-column">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-column">
        <label for="age">Age:</label>
        <input type="number" name="age" id="age" required>
      </div>
    </div>
    <div class="button-row">
      <input type="submit" name="register" value="register">
    </div>
  </form>
</body>
</html>