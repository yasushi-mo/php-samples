<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['register'])) {
      // Click register button
      $name = $_POST['name'];
      $age = $_POST['age'];

      // Connect to RDS
      $conn = connectToDB();

      $sql = "INSERT INTO users (name, age) VALUES ('$name', '$age')";

      if ($conn->query($sql) === true) {
          echo "Registered";
      } else {
          echo "Failed to register: " . $conn->error;
      }

      $conn->close();
    } elseif (isset($_POST['search'])) {
      // Click search button
      $conn = connectToDB();

      $sql = "SELECT name, age FROM users";

      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          echo "<table>";
          echo "<tr><th>Name</th><th>Age</th></tr>";
          while ($row = $result->fetch_assoc()) {
              echo "<tr><td>".$row["name"]."</td><td>".$row["age"]."</td></tr>";
          }
          echo "</table>";
      } else {
          echo "Not found";
      }

      $conn->close();
    }
  }

  function connectToDB() {
    include "config.php";

    $conn = new mysqli($serverName, $userName, $password, $dbName);

    if ($conn->connect_error) {
      die("Failed to connect: " . $conn->connect_error);
    }

    return $conn;
  }
?>