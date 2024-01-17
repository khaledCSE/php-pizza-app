<?php

$conn = mysqli_connect("db", "khaled", "password", "pizza_db");

$query = "SELECT * FROM pizzas";

$result = mysqli_query($conn, $query);

print_r($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>

<body>
  <h1>Home</h1>
</body>

</html>