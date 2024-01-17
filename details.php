<?php
include("config/db_connect.php");

if (isset($_GET["id"])) {
  $id = mysqli_escape_string($conn, $_GET["id"]);

  $sql = "SELECT * FROM pizzas WHERE id=$id";

  $result = mysqli_query($conn, $sql);

  $pizza = mysqli_fetch_assoc($result);

  mysqli_free_result($result);

  mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include("templates/header.php"); ?>
<div class="container">
  <h1>Pizza Details</h1>
  <?php if ($pizza): ?>
    <h4>
      <?php echo $pizza['title']; ?>
    </h4>
    <p>Created by
      <?php echo $pizza['email']; ?>
    </p>
    <p>
      <?php echo date($pizza['created_at']); ?>
    </p>
    <h5>Ingredients:</h5>
    <p>
      <?php echo $pizza['ingredients']; ?>
    </p>
  <?php else: ?>
    <h5>No such pizza exists.</h5>
  <?php endif ?>
</div>

<?php include("templates/footer.php"); ?>

</html>