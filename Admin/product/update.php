<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <link href="index.php">
</head>
<body>
  <?php

  $id=$_GET['ID'];
   
  $con=mysqli_connect("localhost:3307","root","","ecommerce");

  $record=mysqli_query($con," SELECT * FROM `tblproduct` WHERE id = $id ");

  $data=mysqli_fetch_array($record);
   
  ?>
  <div class="container">
    <div class="row">
      <div class="col-md-6 m-auto border border-primary mt-3">
       <form action="update.php" method="POST" enctype="multipart/form-data">
        <div class="col-mb-3">
       <p class="text-center fs-3 fw-bold text-warning">Product Upload:</p>
        </div>
        <div class="col-mb-3">
        <label  class="form-label">Product Name:</label>
        <input type="text" value="<?php echo $data['Pname']?>" name="Pname" class="form-control" placeholder="Enter product name" >
        </div>
        <div class="col-mb-3">
        <label  class="form-label">Product Price:</label>
        <input type="text" value="<?php echo $data['Pprice']?>" name="Pprice" class="form-control" placeholder="Enter product price" >
        </div>
        <div class="col-mb-3">
        <label  class="form-label"> Add Product Image:</label>
        <input type="file" name="Pimage" class="form-control"><br>
        <img src="<?php echo $data['Pimage']?>" alt=''>
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
        <input type="hidden" name="ID" value="<?php echo $data['id']?>">
        <button name="update" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Update</button>
  </form>
      </div>
    </div>
  </div>
  <!--update code-->
  <?php
    if(isset($_POST['update'])){
  include 'config.php';
  $product_id=$_POST['ID'];
  $product_name=$_POST['Pname'];
  $product_price=$_POST['Pprice'];
  $product_image=$_FILES['Pimage'];
  $image_loc=$_FILES['Pimage'] ['tmp_name'];
  $image_name=$_FILES['Pimage'] ['name'];
  $img_des="Uploadimage/".$image_name;
  move_uploaded_file($image_loc,"Uploadimage/".$image_name);

  $product_category=$_POST['Pages'];

  mysqli_query($con,"UPDATE `tblproduct` SET `Pname`='$product_name',`Pprice`='$product_price,`Pimage`='$img_des',`Pcategory`='$product_category' WHERE id=$product_id");
  header("location:index.php");

  }
  ?>




  
  
</body>
</html>