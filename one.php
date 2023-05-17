<?php
// $servername = "localhost";  // Replace with your server name if different
// $username = "root";  // Replace with your MySQL username
// $password = "Nivashbose";  // Replace with your MySQL password
// $dbname = "employee";  // Replace with the name of your MySQL database

// // Create a connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection

// this code for finding the largest number

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $numbers = $_POST['numbers'];

  // Convert the input string into an array of numbers
  $numberArray = explode(',', $numbers);

  // Trim whitespace from each number
  $numberArray = array_map('trim', $numberArray);

  // Remove any empty elements from the array
  $numberArray = array_filter($numberArray);

  if (!empty($numberArray)) {
    // Find the maximum number
    $maxNumber = max($numberArray);
    echo "The largest number is: $maxNumber";
  } else {
    echo "No numbers were provided.";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Find the Largest Number</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
  
</head>
<body>
  <form method="POST" action="">
    <label for="numbers">Enter numbers (comma-separated):</label><br>
    <input type="text" name="numbers" id="numbers" required><br>
    <input type="submit" value="Find the Largest Number">
  </form>
</body>
</html>


