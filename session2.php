<?php
require 'config.php';
include('session1.php');

$que = "SELECT * FROM admin_user WHERE id='$session_id' ";
$query = mysqli_query($con, $que);
$row = mysqli_num_rows($query);
?>