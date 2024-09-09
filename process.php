<?php
  function connectToDB() {
    include "config.php";

    $conn = new mysqli($serverName, $userName, $password, $dbName);

    if ($conn->connect_error) {
      die("Failed to connect: " . $conn->connect_error);
    }

    return $conn;
  }
?>