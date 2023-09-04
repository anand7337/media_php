<?php
 require 'config.php';
 session_start();
   if(isset($_POST['submitt'])) {
    $emaill = $_POST['emaill'];
    $passwordd = $_POST['passwordd'];

    $qry = "SELECT * FROM admin_user WHERE email='$emaill' AND password='$passwordd' ";
    $query = mysqli_query($con,$qry);
    $row = mysqli_fetch_array($query);
    if($row > 0) {
        $_SESSION['id']=$row['id'];
        header("location:admin.php?id=" .$row['id']);
    }
    else {
        echo 'username and password does not matching';
    }
}


?>
