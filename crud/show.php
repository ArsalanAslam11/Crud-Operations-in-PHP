<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crud Operations</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <style>
    
    body {
      background-color: #008080; 
    }

 
    .container {
      background-color: #008080;
      padding: 20px;
      border-radius: 10px;
      color: white; 
    }
    .table {
      background-color: #008080;
      color: black; 
    }
    .btn a {
      color: white;
      text-decoration: none; 
    }
  </style>
</head>

<body>
  <div class="container">
    <button class="btn btn-primary" style="margin-top:50px">
      <a href="crudoperations.php" class="text-white">Add</a>
    </button>
    <table class="table" style="margin-top:10px">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone Number</th>
          <th scope="col">Password</th>
          <th scope="col">Operations</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'connection.php';
        $sql = "SELECT * FROM crud";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $mobile = $row['mobile'];
            $password = $row['password'];
            echo '<tr>
            <th scope="row">' . $id . '</th>
            <td>' . $name . '</td>
            <td>' . $email . '</td>
            <td>' . $mobile . '</td>
            <td>' . $password . '</td>
            <td>
                <button class="btn btn-warning"><a href="update.php?id=' . $id . '" class="text-white">Update</a></button>
                <button class="btn btn-danger"><a href="delete.php?id=' . $id . '" class="text-white">Delete</a></button>
            </td>
        </tr>';
          }
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>
