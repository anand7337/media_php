<?php
include('session2.php');
require 'config.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    extract($_REQUEST);
    ?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
            integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
        <link rel="stylesheet" href="easion.css">
        <link rel="stylesheet" href="styleadmin.css" type="text/css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
        <script src="js/chart-js-config.js"></script>
        <title>Jackpot Talkies - Edit & Update</title>
    </head>

    <body>
        <div class="dash">
            <div class="dash-nav dash-nav-dark">
                <header>
                    <a href="#!" class="menu-toggle">
                        <i class="fas fa-bars"></i>
                    </a>
                    <a href="admin.php" class="easion-logo"><i class="fas fa-sun"></i> <span>Jackpot Talkies</span></a>
                </header>
                <nav class="dash-nav-list">
                    <a href="index.php" class="dash-nav-item">
                        <i class="fas fa-home"></i> Dashboard </a>
                    <div class="dash-nav-dropdown">
                        <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                            <i class="fas fa-chart-bar"></i> Upload </a>
                        <div class="dash-nav-dropdown-menu">
                            <a href="upload.php" class="dash-nav-dropdown-item">Upload Videos</a>
                        </div>
                    </div>
                    <div class="dash-nav-dropdown ">
                        <a href="database.php" class="dash-nav-item">
                            <i class="fas fa-cube"></i> DataBase
                        </a>
                    </div>
                    <div class="dash-nav-dropdown">
                        <a href="edit.php" class="dash-nav-item">
                            <i class="fas fa-file"></i> Edit
                        </a>
                    </div>
                    <div class="dash-nav-dropdown">
                        <a href="user_details.php" class="dash-nav-item">
                            <i class="fas fa-info"></i> User Details
                        </a>
                    </div>
                </nav>
            </div>
            <!-- side navbar end -->
            <div class="dash-app">
                <header class="dash-toolbar">
                    <a href="#!" class="menu-toggle">
                        <i class="fas fa-bars"></i>
                    </a>
                    <a href="#!" class="searchbox-toggle">
                        <i class="fas fa-search"></i>
                    </a>
                    <form class="searchbox" action="#!">
                        <a href="#!" class="searchbox-toggle"> <i class="fas fa-arrow-left"></i> </a>
                        <button type="submit" class="searchbox-submit"> <i class="fas fa-search"></i> </button>
                        <input type="text" class="searchbox-input" placeholder="type to search">
                    </form>
                    <div class="tools">
                        <a href="#" target="_blank" class="tools-item">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#!" class="tools-item">
                            <i class="fas fa-bell"></i>
                            <i class="tools-item-count">4</i>
                        </a>
                        <div class="dropdown tools-item">
                            <a href="#" class="" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas fa-user"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                <a class="dropdown-item" href="#!">Profile</a>
                                <a class="dropdown-item" href="logout.php">Logout</a>
                            </div>
                        </div>
                    </div>
                </header>
                <main class="dash-content">
                    <div class="container">

                        <div class="right">
                            <?php
                            $query = "SELECT id,selectcat,emptitle,empdesc,profilepic FROM selectcat WHERE id=$id";
                            $result = mysqli_query($con, $query);
                            if (mysqli_num_rows($result) > 0) {
                                ?>
                                <form action="manfunction.php" class="empform" id="empform" method="post"
                                    enctype="multipart/form-data">
                                    <table cellspacing="20">
                                        <tr>
                                            <th colspan="2">
                                                <center>Upload Form</center>
                                            </th>
                                        </tr>
                                        <?php
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <tr>
                                                <td>ID</td>
                                                <td><input type="text" readonly id="empid" name="id" value="<?= $id ?>"></td>
                                            </tr>

                                            <tr>
                                                <td>Select Category</td>
                                                <td>
                                                    <select name="selectcat" value="<?= $row['selectcat'] ?>">
                                                        <option value="cinterviews">Celebrity Interviews</option>
                                                        <option value="cupdates">Cinema Updates</option>
                                                        <option value="preview">Movie Public Reviews</option>
                                                        <option value="pshows">Public Issues Shows</option>
                                                        <option value="sfilms">Short Films</option>
                                                        <option value="rvideos">Random Videos</option>
                                                        <option value="wseries">Web Series</option>
                                                        <option value="shorts">Shorts</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Title</td>
                                                <td><input type="text" value="<?= $row['emptitle'] ?>" name="emptitle" required></td>
                                            </tr>

                                            <tr>

                                                <td>Description</td>
                                                <td><input style="padding:10px;" value="<?= $row['empdesc'] ?>" name="empdesc"
                                                        required /></td>
                                            </tr>

                                            <tr>
                                                <td>POST VIDEO</td>
                                                <td><video name="profilepic" controls src="<?= $row['profilepic'] ?>" alt="video"
                                                        width="200" height="200"></video></td>
                                            </tr>

                                            <tr>
                                                <td>Change VIDEO</td>
                                                <td><input type="file" name="profilepic" required></td>
                                            </tr>

                                            <tr>
                                                <td><button class="sbtn" name="submit" value="update">Submit</button></td>
                                            </tr>
                                        <?php } ?>
                                    </table>
                                </form>
                            <?php } else {
                                echo "Failed, Try Again";
                            }

}
?>
                    </div>

                </div>
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="js/easion.js"></script>
</body>

</html>