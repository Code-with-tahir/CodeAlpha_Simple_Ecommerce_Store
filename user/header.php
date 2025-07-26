<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <?php
   
  session_start();
  $count=0;
  if(isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']);
  }
  ?>
  <nav class="navbar navbar-light bg-light">
  <div class="container-fluid font-monospace">
    <a class="navbar-brand pb-2"><img src="logo.png" alt=""></a>
    
    <div class="d-flex text-center">
   <a href="index.php" class="text-warning text-decoration-none p-2" ><i class="fa-solid fa-house-user"></i>Home</a>
      <a href="viewcart.php" class="text-warning text-decoration-none p-2" > <i class="fa-solid fa-cart-plus"></i>Cart(<?php echo $count;?>) |</a>
      <span class="text-warning p-2">
        <i class="fa-solid fa-user"></i>Hello, <?php
       // session_start();
       if(isset($_SESSION['user'])){ 
        echo $_SESSION['user'];
        echo "| <a href='form/logout.php' class='text-warning text-decoration-none p-2'><i class='fa-solid fa-right-to-bracket'></i>Logout</a>"; 
       }else
       {
                    echo "<a href='form/login.php' class='text-warning text-decoration-none p-2'><i class='fa-solid fa-right-to-bracket'></i>Login</a>";
       }
        ?>
        |
        
    
        <a href="../Admin/mystore.php" class="text-warning text-decoration-none p-2">Admin</a>
      </span>
  
</nav>
</div>
<div class="bg-danger sticky-top font-monospace">
  <ul class="list-unstyled d-flex justify-content-center" >
  <li><a href="laptop.php" class="text-decoration-none fw-bold text-white fs-4 px-5">LAPTOPS</a></li>
  <li><a href="mobile.php" class="text-decoration-none fw-bold text-white fs-4 px-5">MOBILES</a></li>
  <li><a href="bag.php" class="text-decoration-none fw-bold text-white fs-4 px-5">BAGS</a></li>
</ul>
</div>
  
</body>
</html>