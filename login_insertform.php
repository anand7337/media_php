<?php
require 'config.php';

if (isset($_POST['submit'])) {
  $username = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $qry = "INSERT INTO admin_user (username,email,password) VALUES ('$username','$email','$password')";
  $query = mysqli_query($con, $qry);
  if ($query) {
    header('location:signup.php');
  } else {
    echo 'not sent succesfully';
  }
}
?>