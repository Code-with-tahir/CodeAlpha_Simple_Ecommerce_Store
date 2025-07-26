<?php

$con=mysqli_connect("localhost:3307","root","","ecommerce");

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $number=$_POST['number'];
  $password=$_POST['password'];


  $dup_email=mysqli_query($con,"SELECT * FROM `tbluser` WHERE user_email='$email'");
  $dup_name=mysqli_query($con,"SELECT * FROM `tbluser` WHERE user_name='$name'");
  if(mysqli_num_rows($dup_email)){
    echo"
    <script>
    alert('Email already taken');
    window.location.href='register.php';
    </script>
    ";
  }
    if(mysqli_num_rows($dup_name)){
    echo"
    <script>
    alert('Username already taken');
    window.location.href='register.php';
    </script>
    ";
  }
  else{
       mysqli_query($con,"INSERT INTO `tbluser`( `user_name`, `user_email`, `user_number`, `user_password`) VALUES ('$name','$email','$number','$password')");
           echo"
    <script>
    alert('Registration successfully');
    window.location.href='login.php';
    </script>
    ";
  }
}
?>