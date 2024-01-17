<?php
$conn = mysqli_connect("db", "khaled", "password", "pizza_db");

// check connection
if (!$conn) {
  echo 'Connection error: ' . mysqli_connect_error();
}

?>