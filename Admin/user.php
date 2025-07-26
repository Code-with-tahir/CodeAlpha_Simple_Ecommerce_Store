<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
  <?php
  include 'mystore.php';
  $con=mysqli_connect("localhost:3307","root","","ecommerce");
  $record=mysqli_query($con,"SELECT * FROM `tbluser`");
  $row_count=mysqli_num_rows($record);
  ?>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-10">
     <table class="table table-secondary table-bordered">
    <thead class="text-center">
      <th>S.No.</th>
      <th>Name</th>
      <th>Email</th>
      <th>Number</th>
      <th>Delete</th>
    </thead>
    <tbody class="text-center text-danger">
      <?php
      while($row=mysqli_fetch_array($record)){
        echo"
            <tr>
            <td>$row[id]</td>
            <td>$row[user_name]</td>
            <td>$row[user_email]</td>
            <td>$row[user_number]</td>
            <td><a href='delete.php? ID=$row[id]'class='btn btn-outline-danger'>Delete</a></td>
            </tr>
        ";
      }
      ?>
    </tbody>
  </table>
  </div>
    
  <div class="col-md-3 pr-5 text-center">
  <h3 class="text-danger">Total</h3>
  <h1 class="bg-danger text-white"><?php echo $row_count;?></h1>
    </div>
  </div>
</div>
</body>
</html>