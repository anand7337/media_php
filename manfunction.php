<?php

require 'config.php';

// extract($_REQUEST);

if (isset($_POST['submit']) && $_POST['submit'] == 'create') {
    $selectcat = $_POST['selectcat'];
    $emptitle = $_POST['emptitle'];
    $empdesc = $_POST['empdesc'];

    $fname = $_FILES['profilepic']['name'];
    $explode = explode('.', $fname);
    $end = end($explode);
    $strlow = strtolower($end);
    $ext = $strlow;
    // $ext = strtolower(end(explode('.',$fname)));
    if ($ext == 'mp4' || $ext == 'avi' || $ext == 'flv' || $ext == 'mkv') {

        $dir = 'profilepic';
        $newfname = $emptitle . '.' . $ext;
        $profile_path = $dir . '/' . $newfname;
        move_uploaded_file($_FILES['profilepic']['tmp_name'], $profile_path);

        $query = "INSERT INTO selectcat(selectcat,emptitle,empdesc,profilepic) VALUES('$selectcat','$emptitle','$empdesc','$profile_path')";
        echo $result = mysqli_query($con, $query);
        if ($result === true) {
            header('location:upload.php');
        } else {
            echo "Record Not Found";
        }
    }

} else if (isset($_POST['submit']) && $_POST['submit'] == 'update') {
    $id = $_POST['id'];
    $selectcat = $_POST['selectcat'];
    $emptitle = $_POST['emptitle'];
    $empdesc = $_POST['empdesc'];

    $fname = $_FILES['profilepic']['name'];
    $explode = explode('.', $fname);
    $end = end($explode);
    $strlow = strtolower($end);
    $ext = $strlow;

    if ($_FILES['profilepic']['size'] == 0) {
        $qry = "UPDATE selectcat SET selectcat='$selectcat',emptitle='$emptitle',empdesc='$empdesc',profilepic='$profile_path' WHERE id=$id";
        $result = mysqli_query($con, $qry);

        if ($result) {
            header('location:database.php');
        } else {
            mysqli_error($data);
        }
    } else if ($ext == 'mp4' || $ext == 'avi' || $ext == 'flv' || $ext == 'mkv') {

        $dir = 'profilepic';
        $newfname = $emptitle . '.' . $ext;
        $profile_path = $dir . '/' . $newfname;
        move_uploaded_file($_FILES['profilepic']['tmp_name'], $profile_path);

        $qry = "UPDATE selectcat SET selectcat='$selectcat',emptitle='$emptitle',empdesc='$empdesc',profilepic='$profile_path' WHERE id=$id";
        $res = mysqli_query($con, $qry);
        if ($res === true) {
            header("location:database.php");
        } else {
            echo "Failed, Try Again";
        }
    }

} else if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $qry2 = "DELETE FROM selectcat WHERE id=$id";
    $result2 = mysqli_query($con, $qry2);
    if ($result2 === true) {
        header('location:database.php');
    } else {
        echo "Failed, Try Again to Delete";
    }
}

?>