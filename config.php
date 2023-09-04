<?php
$con = mysqli_connect('localhost', 'root', '', 'myjackpot');
if (!$con) {
   die('connection error:' . mysqli_connect_error());
}
?>