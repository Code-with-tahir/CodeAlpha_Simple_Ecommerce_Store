<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 m-auto border border-primary mt-3">
       <form action="insert.php" method="POST" enctype="multipart/form-data">
        <div class="col-mb-3">
       <p class="text-center fs-3 fw-bold text-warning">Product Detail:</p>
        </div>
        <div class="col-mb-3">
        <label  class="form-label">Product Name:</label>
        <input type="text" name="Pname" class="form-control" placeholder="Enter product name" >
        </div>
        <div class="col-mb-3">
        <label  class="form-label">Product Price:</label>
        <input type="text" name="Pprice" class="form-control" placeholder="Enter product price" >
        </div>
        <div class="col-mb-3">
        <label  class="form-label"> Add Product Image:</label>
        <input type="file" name="Pimage" class="form-control">
        </div>
         <div class="col-mb-3">
        <label  class="form-label">Select Page Category:</label>
              <select class="form-select" name="Pages">
          <option value="Home">Home</option>
          <option value="Laptop">Laptop</option>
          <option value="Bag">Bag</option>
          <option value="Mobile">Mobile</option>
        </select>
        </div>
        <button  name="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Upload</button>
  </form>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 m-auto">
  <table class="table table-striped border border-warning table-hover border my-5">
   <thead class="bg-dark text-white fs-5 font-monospace text-center">
    <th>Id</th>
    <th>Name</th>
    <th>Price</th>
    <th>Image</th>
    <th>Category</th>
    <th>Delete</th>
    <th>Update</th>
</thead>
    <tbody class="text-center">
      <?php
      include 'config.php';
      $records=mysqli_query($con,"SELECT * FROM `tblproduct`");
      while($row=mysqli_fetch_array($records))
        echo "
      <tr>
      <td>$row[id]</td>
      <td>$row[Pname]</td>
      <td>$row[Pprice]</td>
      <td><img src='$row[Pimage]'></td>
      <td>$row[Pcategory]</td>
        <td><a href='delete.php? ID= $row[id]'class='btn btn-danger'>Delete</a></td>
        <td><a href='update.php? ID= $row[id]' class='btn btn-warning'>Update</a></td>
      </tr>
      ";

      ?>
    </tbody>
  
</table>
</div>
</div>
</div>



  
  
</body>
</html>