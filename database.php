<?php
require 'config.php';
include('session2.php');

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
    <link href="logo/LOGO.png" rel="icon">
    <title>Jackpot Talkies - Database</title>
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
                <a href="admin.php" class="dash-nav-item">
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
                    <h4 class="database-title">Cinema Interviews:</h4>
                    <div class="right">

                        <?php
                        $qry = "SELECT * FROM selectcat WHERE selectcat='cinterviews'";
                        $res = mysqli_query($con, $qry);
                        $numrow = mysqli_num_rows($res);
                        if ($numrow > 0) {
                            ?>
                            <table class="emplist">
                                <thead>
                                    <tr class="thead">
                                        <th>CATEGORY</th>
                                        <th>TITLE</th>
                                        <th>DESCRIPTION</th>
                                        <th>PLAY LISTS</th>
                                        <th colspan="2" class="action">ACTIONS</th>
                                    </tr>
                                </thead>
                                <?php
                                while ($row = mysqli_fetch_assoc($res)) {
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?= $row['selectcat'] ?>
                                            </td>
                                            <td>
                                                <?= $row['emptitle'] ?>
                                            </td>
                                            <td>
                                                <?= $row['empdesc'] ?>
                                            </td>
                                            <td><video src="<?= $row['profilepic'] ?>" width="200" height="200"
                                                    controls></video></td>
                                            <td>
                                                <a class="anchor1" href="edit.php?id=<?= $row['id'] ?>">EDIT</a>
                                            </td>
                                            <td>
                                                <a class="anchor2" href="manfunction.php?id=<?= $row['id'] ?>">DELETE</a>
                                            </td>

                                        </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        <?php
                        } else {
                            echo "Record Not Found";
                        }
                        ?>

                    </div>
                </div><br><br>
                <div class="container">
                    <h4 class="database-title">Cinema Updates:</h4>
                    <div class="right">
                        <?php
                        $qry = "SELECT * FROM selectcat WHERE selectcat='cupdates'";
                        $res = mysqli_query($con, $qry);
                        $numrow = mysqli_num_rows($res);
                        if ($numrow > 0) {
                            ?>
                            <table class="emplist">
                                <thead>
                                    <tr class="thead">
                                        <th>CATEGORY</th>
                                        <th>TITLE</th>
                                        <th>DESCRIPTION</th>
                                        <th>PLAY LISTS</th>
                                        <th colspan="2" class="action">ACTIONS</th>
                                    </tr>
                                </thead>
                                <?php
                                while ($row = mysqli_fetch_assoc($res)) {
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?= $row['selectcat'] ?>
                                            </td>
                                            <td>
                                                <?= $row['emptitle'] ?>
                                            </td>
                                            <td>
                                                <?= $row['empdesc'] ?>
                                            </td>
                                            <td><video src="<?= $row['profilepic'] ?>" width="200" height="200"
                                                    controls></video></td>
                                            <td>
                                                <a class="anchor1" href="edit.php?id=<?= $row['id'] ?>">EDIT</a>
                                            </td>
                                            <td>
                                                <a class="anchor2" href="manfunction.php?id=<?= $row['id'] ?>">DELETE</a>
                                            </td>
                                        </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        <?php
                        } else {
                            echo "Record Not Found";
                        }
                        ?>

                    </div>
                </div>
                <div class="container">
                    <h4 class="database-title">Public Reviews:</h4>
                    <div class="right">
                        <?php
                        $qry = "SELECT * FROM selectcat WHERE selectcat='preview'";
                        $res = mysqli_query($con, $qry);
                        $numrow = mysqli_num_rows($res);
                        if ($numrow > 0) {
                            ?>
                            <table class="emplist">
                                <thead>
                                    <tr class="thead">
                                        <th>CATEGORY</th>
                                        <th>TITLE</th>
                                        <th>DESCRIPTION</th>
                                        <th>PLAY LISTS</th>
                                        <th colspan="2" class="action">ACTIONS</th>
                                    </tr>
                                </thead>
                                <?php
                                while ($row = mysqli_fetch_assoc($res)) {
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?= $row['selectcat'] ?>
                                            </td>
                                            <td>
                                                <?= $row['emptitle'] ?>
                                            </td>
                                            <td>
                                                <?= $row['empdesc'] ?>
                                            </td>
                                            <td><video src="<?= $row['profilepic'] ?>" width="200" height="200"
                                                    controls></video></td>
                                            <td>
                                                <a class="anchor1" href="edit.php?id=<?= $row['id'] ?>">EDIT</a>
                                            </td>
                                            <td>
                                                <a class="anchor2" href="manfunction.php?id=<?= $row['id'] ?>">DELETE</a>
                                            </td>
                                        </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        <?php
                        } else {
                            echo "Record Not Found";
                        }
                        ?>
                    </div>
                </div>
                <div class="container">
                    <h4 class="database-title">Public Shows:</h4>
                    <div class="right">
                        <?php
                        $qry = "SELECT * FROM selectcat WHERE selectcat='pshows'";
                        $res = mysqli_query($con, $qry);
                        $numrow = mysqli_num_rows($res);
                        if ($numrow > 0) {
                            ?>
                            <table class="emplist">
                                <thead>
                                    <tr class="thead">
                                        <th>CATEGORY</th>
                                        <th>TITLE</th>
                                        <th>DESCRIPTION</th>
                                        <th>PLAY LISTS</th>
                                        <th colspan="2" class="action">ACTIONS</th>
                                    </tr>
                                </thead>
                                <?php
                                while ($row = mysqli_fetch_assoc($res)) {
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?= $row['selectcat'] ?>
                                            </td>
                                            <td>
                                                <?= $row['emptitle'] ?>
                                            </td>
                                            <td>
                                                <?= $row['empdesc'] ?>
                                            </td>
                                            <td><video src="<?= $row['profilepic'] ?>" width="200" height="200"
                                                    controls></video></td>
                                            <td>
                                                <a class="anchor1" href="edit.php?id=<?= $row['id'] ?>">EDIT</a>
                                            </td>
                                            <td>
                                                <a class="anchor2" href="manfunction.php?id=<?= $row['id'] ?>">DELETE</a>
                                            </td>
                                        </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        <?php
                        } else {
                            echo "Record Not Found";
                        }
                        ?>
                    </div>
                </div>
                <div class="container">
                    <h4 class="database-title">Short Films:</h4>
                    <div class="right">
                        <?php
                        $qry = "SELECT * FROM selectcat WHERE selectcat='sfilms'";
                        $res = mysqli_query($con, $qry);
                        $numrow = mysqli_num_rows($res);
                        if ($numrow > 0) {
                            ?>
                            <table class="emplist">
                                <thead>
                                    <tr class="thead">
                                        <th>CATEGORY</th>
                                        <th>TITLE</th>
                                        <th>DESCRIPTION</th>
                                        <th>PLAY LISTS</th>
                                        <th colspan="2" class="action">ACTIONS</th>
                                    </tr>
                                </thead>
                                <?php
                                while ($row = mysqli_fetch_assoc($res)) {
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?= $row['selectcat'] ?>
                                            </td>
                                            <td>
                                                <?= $row['emptitle'] ?>
                                            </td>
                                            <td>
                                                <?= $row['empdesc'] ?>
                                            </td>
                                            <td><video src="<?= $row['profilepic'] ?>" width="200" height="200"
                                                    controls></video></td>
                                            <td>
                                                <a class="anchor1" href="edit.php?id=<?= $row['id'] ?>">EDIT</a>
                                            </td>
                                            <td>
                                                <a class="anchor2" href="manfunction.php?id=<?= $row['id'] ?>">DELETE</a>
                                            </td>
                                        </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        <?php
                        } else {
                            echo "Record Not Found";
                        }
                        ?>
                    </div>
                </div>
                <div class="container">
                    <h4 class="database-title">Random Videos:</h4>
                    <div class="right">
                        <?php
                        $qry = "SELECT * FROM selectcat WHERE selectcat='rvideos'";
                        $res = mysqli_query($con, $qry);
                        $numrow = mysqli_num_rows($res);
                        if ($numrow > 0) {
                            ?>
                            <table class="emplist">
                                <thead>
                                    <tr class="thead">
                                        <th>CATEGORY</th>
                                        <th>TITLE</th>
                                        <th>DESCRIPTION</th>
                                        <th>PLAY LISTS</th>
                                        <th colspan="2" class="action">ACTIONS</th>
                                    </tr>
                                </thead>
                                <?php
                                while ($row = mysqli_fetch_assoc($res)) {
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?= $row['selectcat'] ?>
                                            </td>
                                            <td>
                                                <?= $row['emptitle'] ?>
                                            </td>
                                            <td>
                                                <?= $row['empdesc'] ?>
                                            </td>
                                            <td><video src="<?= $row['profilepic'] ?>" width="200" height="200"
                                                    controls></video></td>
                                            <td>
                                                <a class="anchor1" href="edit.php?id=<?= $row['id'] ?>">EDIT</a>
                                            </td>
                                            <td>
                                                <a class="anchor2" href="manfunction.php?id=<?= $row['id'] ?>">DELETE</a>
                                            </td>
                                        </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        <?php
                        } else {
                            echo "Record Not Found";
                        }
                        ?>
                    </div>
                </div>
                <div class="container">
                    <h4 class="database-title">Web Series:</h4>
                    <div class="right">
                        <?php
                        $qry = "SELECT * FROM selectcat WHERE selectcat='wseries'";
                        $res = mysqli_query($con, $qry);
                        $numrow = mysqli_num_rows($res);
                        if ($numrow > 0) {
                            ?>
                            <table class="emplist">
                                <thead>
                                    <tr class="thead">
                                        <th>CATEGORY</th>
                                        <th>TITLE</th>
                                        <th>DESCRIPTION</th>
                                        <th>PLAY LISTS</th>
                                        <th colspan="2" class="action">ACTIONS</th>
                                    </tr>
                                </thead>
                                <?php
                                while ($row = mysqli_fetch_assoc($res)) {
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?= $row['selectcat'] ?>
                                            </td>
                                            <td>
                                                <?= $row['emptitle'] ?>
                                            </td>
                                            <td>
                                                <?= $row['empdesc'] ?>
                                            </td>
                                            <td><video src="<?= $row['profilepic'] ?>" width="200" height="200"
                                                    controls></video></td>
                                            <td>
                                                <a class="anchor1" href="edit.php?id=<?= $row['id'] ?>">EDIT</a>
                                            </td>
                                            <td>
                                                <a class="anchor2" href="manfunction.php?id=<?= $row['id'] ?>">DELETE</a>
                                            </td>
                                        </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        <?php
                        } else {
                            echo "Record Not Found";
                        }
                        ?>
                    </div>
                </div>
                <div class="container">
                    <h4 class="database-title">Shorts:</h4>
                    <div class="right">
                        <?php
                        $qry = "SELECT * FROM selectcat WHERE selectcat='shorts'";
                        $res = mysqli_query($con, $qry);
                        $numrow = mysqli_num_rows($res);
                        if ($numrow > 0) {
                            ?>
                            <table class="emplist">
                                <thead>
                                    <tr class="thead">
                                        <th>CATEGORY</th>
                                        <th>TITLE</th>
                                        <th>DESCRIPTION</th>
                                        <th>PLAY LISTS</th>
                                        <th colspan="2" class="action">ACTIONS</th>
                                    </tr>
                                </thead>
                                <?php
                                while ($row = mysqli_fetch_assoc($res)) {
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?= $row['selectcat'] ?>
                                            </td>
                                            <td>
                                                <?= $row['emptitle'] ?>
                                            </td>
                                            <td>
                                                <?= $row['empdesc'] ?>
                                            </td>
                                            <td><video src="<?= $row['profilepic'] ?>" width="200" height="200"
                                                    controls></video></td>
                                            <td>
                                                <a class="anchor1" href="edit.php?id=<?= $row['id'] ?>">EDIT</a>
                                            </td>
                                            <td>
                                                <a class="anchor2" href="manfunction.php?id=<?= $row['id'] ?>">DELETE</a>
                                            </td>
                                        </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        <?php
                        } else {
                            echo "Record Not Found";
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