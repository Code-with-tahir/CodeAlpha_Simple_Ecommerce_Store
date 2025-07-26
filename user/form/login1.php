<?php
$name=$_POST['name'];
$password=$_POST['password'];
$con=mysqli_connect("localhost:3307","root","","ecommerce");

$result=mysqli_query($con,"SELECT * FROM `tbluser` WHERE user_name='$name' and user_password='$password'");

session_start();
if(mysqli_num_rows($result)){

  $_SESSION['user']=$name;
      echo"
    <script>
    alert('Successfully Login');
    window.location.href='../index.php';
    </script>
    ";
}else{
         echo"
    <script>
    alert('Invalid username/password');
    window.location.href='login.php';
    </script>
    ";
}


?>