<?php
$servername = "localhost";
$username = "myroot";
$password = "1234";
$dbname = "my_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['temperature']) && isset($_GET['humidity'])){
    $temperature = $_GET['temperature'];
    $humidity = $_GET['humidity'];

    $sql = "INSERT INTO SensorData (temperature, humidity) VALUES ('$temperature', '$humidity')";

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "No data received";
}

$conn->close();
?>
