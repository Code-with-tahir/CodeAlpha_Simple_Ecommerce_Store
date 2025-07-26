<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <?php
  include 'header.php';
  ?>
</head>
<body>
  <div class="container-fluid">
    <div class="col-md-12">
      <div class="row">

    
  <h1 class="text-warning text-center font-monospace my-3">BAGS</h1>
  <?php
  include 'Config.php';
  $records=mysqli_query($con,"SELECT * FROM `tblproduct`");
  while($row=mysqli_fetch_array($records)){
    $check_category=$row['Pcategory'];
    if($check_category==='Bag'){
    echo "
   <div class='col-md-6 col-lg-4'>
   <form action='insertcart.php' method='POST'>
  <div class='card m-auto' style='width: 18rem;'>
  <img src='../Admin/product/$row[Pimage]' class='card-img-top'>
  <div class='card-body text-center'>
    <h5 class='card-title text-danger fs-4 fw-bold'>$row[Pname]</h5>
    <p class='card-text text-danger fs-4 fw-bold'>RS:$row[Pprice] </p>
    <input type='hidden' name='pname' value='$row[Pname]'>
    <input type='hidden' name='pprice' value='$row[Pprice]'>
    <input type='number' name='pquantity' value='min ='1'  max='20'' placeholder='Quatity'><br><br>
    <input type='submit' name='addcart' class='btn btn-warning text-white w-100' value='Add To Cart'>
    
    
  </div>
</div>
</form>
</div>
";
    }
 }
  ?>
    </div>
    </div>
  </div>
  
</body>
</html>