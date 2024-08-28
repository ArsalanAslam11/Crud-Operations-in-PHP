<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Crud Operations</title>
    <style>
      /* Set the entire page background to teal */
      body {
        background-color: #008080; /* Teal color */
      }
      /* Set the form container background to teal and add some padding and rounded corners */
      .container {
        background-color: #008080; /* Teal color */
        padding: 20px;
        border-radius: 10px;
        color: white; /* Text color to make it readable */
      }
      /* Ensure input fields have a white background for readability */
      .form-control {
        background-color: white;
      }
    </style>
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
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
  </body>
</html>

<?php
include 'connection.php';
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];

  $sql = "INSERT INTO crud (name, email, mobile, password) VALUES ('$name', '$email', '$mobile', '$password')";
  $result = mysqli_query($conn, $sql);
  header("Location: show.php");
  exit;
}
?>
