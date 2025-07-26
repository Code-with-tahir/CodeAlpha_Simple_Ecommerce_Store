<?php
$con=mysqli_connect("localhost:3307","root","","ecommerce");
$a_name=$_POST['username'];
$a_password=$_POST['userpassword'];

$result=mysqli_query($con,"SELECT * FROM `admin` WHERE username='$a_name' AND userpassword='$a_password'");

session_start();
if(mysqli_num_rows($result)){

  $_SESSION['admin']=$a_name;
  echo"
  <script>
   alert('Login successfully');
   window.location.href='../mystore.php';
  </script>
  ";
}

else{
  echo"
  <script>
   alert('Invalid username/password');
   window.location.href='login.php';
  </script>
  ";
}

?>