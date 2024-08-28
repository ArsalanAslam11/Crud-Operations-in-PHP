<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Crud Operations</title>
  </head>
  <body>
    <div class="container my-5">
        <form method="post">
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter your Name" name="name">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Enter your Email" name="email">
            <label>Phone Number</label>
            <input type="number" class="form-control" placeholder="Enter your Number" name="mobile">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Enter your Password" name="password">
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
  </body>
</html>

<?php
include 'connection.php';

$id = $_GET['id'];

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];

  // Corrected SQL syntax
  $sql = "UPDATE crud SET name='$name', email='$email', mobile='$mobile', password='$password' WHERE id=$id";
  
  // Execute the query
  $result = mysqli_query($conn, $sql);

  // Check for success
  if ($result) {
    header("Location: show.php");
    exit;
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
}
?>
