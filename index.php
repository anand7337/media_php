<?php
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="logo/LOGO.png" rel="icon">
  <title>Jackpot Talkies</title>
</head>

<body>
  <!--navbar start-->
  <div class="jackpot">
    <section class="navigation">
      
      <div class="nav-container">
        <div class="brand">
          <a href="#!"><img src="logo/LOGO.png" width="100"></a>
        </div>
        <nav>
          <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
          <ul class="nav-list">
            <li>
              <a href="#home">Home</a>
            </li>
            <li>
              <a href="#about">About</a>
            </li>
            <li>
              <a href="#stories">Our Stories</a>
            </li>
            <li>
              <a href="#service">Services</a>
              <!-- <ul class="nav-dropdown">
            <li>
              <a href="#!">Team Members</a>
            </li>
          </ul> -->
            </li>
            <li>
              <a href="#team">Team</a>
            </li>
            <li>
              <a href="#contact">Contact</a>
            </li>

            <li>
              <a href="signin.php">Signin</a>
              <!-- <ul class="nav-dropdown">
              <li>
                <a href="signin.php">SignIn</a>
              </li> -->
              <!-- <li>
                <a href="signup.php">SignUp</a>
              </li> -->
          </ul>
          </li>

          </ul>
        </nav>
      </div>
    </section>
    <!--navbar end-->
    <!-- banner page -->
    <div id="home">
      <div class="banner" style="margin-top:100px ;">
        <img src="jackpotbanner.jpg" alt="" height="400px" width="100%" class="banner-img">
      </div>
    </div>

    <!-- tabs -->
    <section id="stories" style="margin-bottom:-100px ;">
      <div class="container-fluid wrapper">

        <div class="col-md-12 co-head">
          <h2 class="Contact-header">Our <span class="contact-us"> Stories </span></h2>
        </div>

        <div class="tab-wrapper">
          <div class=" row tab1">
            <div class="col-md-12 tab-column">
              <ul class="tabs tabs1">
                <li class="tab-link  active" data-tab="1">Celebrity Interviews</li>
                <li class="tab-link" data-tab="2">Cinema Updates</li>
                <li class="tab-link" data-tab="3">Movie Reviews</li>
                <li class="tab-link" data-tab="4">Public Issues</li>

              </ul>
            </div>
            <div class="col-md-12 tab-column">
              <ul class="tabs tabs2">
                <li class="tab-link" data-tab="5">Short Films</li>
                <li class="tab-link " data-tab="6">Random Videos</li>
                <li class="tab-link" data-tab="7">Web Series</li>
                <li class="tab-link" data-tab="8">Shorts</li>
              </ul>
            </div>
          </div>
        </div>
        <!-- category 1 -->
        <div class="content-wrapper">

          <div id="tab-1" class="tab-content active">
            <div class="container-fluid">
              <div class="my-vedio">
                <?php
                $qry = "SELECT * FROM selectcat WHERE selectcat='cinterviews'";
                $res = mysqli_query($con, $qry);
                $numrow = mysqli_num_rows($res);
                if ($numrow > 0) {
                  ?>
                  <?php
                  while ($row = mysqli_fetch_assoc($res)) {
                    ?>
                    <div class="card">
                      <div class="video">
                        <video width="100" src="<?= $row['profilepic'] ?>" class="video-source" controls></video>

                        </video>
                      </div>
                      <div class="video-title">
                        <?= $row['emptitle'] ?>
                      </div>
                      <div class="video-desc">
                        <?= $row['empdesc'] ?>
                      </div>
                    </div>
                    <?php
                  }
                  ?>
                  <?php
                } else {
                  echo "Record Not Found";
                }
                ?>
              </div>
            </div>
          </div>
          <!-- category 2 -->
          <div id="tab-2" class="tab-content">
            <div class="container">
              <div class="my-vedio">
                <?php
                $qry = "SELECT * FROM selectcat WHERE selectcat='cupdates'";
                $res = mysqli_query($con, $qry);
                $numrow = mysqli_num_rows($res);
                if ($numrow > 0) {
                  ?>
                  <?php
                  while ($row = mysqli_fetch_assoc($res)) {
                    ?>
                    <div class="card">
                      <div class="video"><video width="100" src="<?= $row['profilepic'] ?>" class="video-source"
                          controls></video></div>
                      <div class="video-title">
                        <?= $row['emptitle'] ?>
                      </div>
                      <div class="video-desc">
                        <?= $row['empdesc'] ?>
                      </div>
                    </div>
                    <?php
                  }
                  ?>
                  <?php
                } else {
                  echo "Record Not Found";
                }
                ?>
              </div>
            </div>
          </div>
          <!-- category 3 -->
          <div id="tab-3" class="tab-content">
            <div class="container">
              <div class="my-vedio">
                <?php
                $qry = "SELECT * FROM selectcat WHERE selectcat='preview'";
                $res = mysqli_query($con, $qry);
                $numrow = mysqli_num_rows($res);
                if ($numrow > 0) {
                  ?>
                  <?php
                  while ($row = mysqli_fetch_assoc($res)) {
                    ?>
                    <div class="card">
                      <div class="video"><video width="100" src="<?= $row['profilepic'] ?>" class="video-source"
                          controls></video></div>
                      <div class="video-title">
                        <?= $row['emptitle'] ?>
                      </div>
                      <div class="video-desc">
                        <?= $row['empdesc'] ?>
                      </div>
                    </div>
                    <?php
                  }
                  ?>
                  <?php
                } else {
                  echo "Record Not Found";
                }
                ?>
              </div>
            </div>
          </div>
          <!-- category 4 -->
          <div id="tab-4" class="tab-content">
            <div class="container">
              <div class="my-vedio">
                <?php
                $qry = "SELECT * FROM selectcat WHERE selectcat='pshows'";
                $res = mysqli_query($con, $qry);
                $numrow = mysqli_num_rows($res);
                if ($numrow > 0) {
                  ?>
                  <?php
                  while ($row = mysqli_fetch_assoc($res)) {
                    ?>
                    <div class="card">
                      <div class="video"><video width="100" src="<?= $row['profilepic'] ?>" class="video-source"
                          controls></video></div>
                      <div class="video-title">
                        <?= $row['emptitle'] ?>
                      </div>
                      <div class="video-desc">
                        <?= $row['empdesc'] ?>
                      </div>
                    </div>
                    <?php
                  }
                  ?>
                  <?php
                } else {
                  echo "Record Not Found";
                }
                ?>
              </div>
            </div>
          </div>
          <!-- category 5 -->
          <div id="tab-5" class="tab-content">
            <div class="container">
              <div class="my-vedio">
                <?php
                $qry = "SELECT * FROM selectcat WHERE selectcat='sfilms'";
                $res = mysqli_query($con, $qry);
                $numrow = mysqli_num_rows($res);
                if ($numrow > 0) {
                  ?>
                  <?php
                  while ($row = mysqli_fetch_assoc($res)) {
                    ?>
                    <div class="card">
                      <div class="video"><video width="100" src="<?= $row['profilepic'] ?>" class="video-source"
                          controls></video></div>
                      <div class="video-title">
                        <?= $row['emptitle'] ?>
                      </div>
                      <div class="video-desc">
                        <?= $row['empdesc'] ?>
                      </div>
                    </div>

                    <?php
                  }
                  ?>
                  <?php
                } else {
                  echo "Record Not Found";
                }
                ?>
              </div>
            </div>
          </div>
          <!-- category 6 -->
          <div id="tab-6" class="tab-content">
            <div class="container">
              <div class="my-vedio">
                <?php
                $qry = "SELECT * FROM selectcat WHERE selectcat='rvideos'";
                $res = mysqli_query($con, $qry);
                $numrow = mysqli_num_rows($res);
                if ($numrow > 0) {
                  ?>
                  <?php
                  while ($row = mysqli_fetch_assoc($res)) {
                    ?>
                    <div class="card">
                      <div class="video"><video width="100" src="<?= $row['profilepic'] ?>" class="video-source"
                          controls></video>
                      </div>

                      <div class="video-title">
                        <?= $row['emptitle'] ?>
                      </div>
                      <div class="video-desc">
                        <?= $row['empdesc'] ?>
                      </div>
                    </div>
                    <?php
                  }
                  ?>
                  <?php
                } else {
                  echo "Record Not Found";
                }
                ?>
              </div>
            </div>
          </div>
          <!-- category 7 -->
          <div id="tab-7" class="tab-content">
            <div class="container">
              <div class="my-vedio">
                <?php
                $qry = "SELECT * FROM selectcat WHERE selectcat='wseries'";
                $res = mysqli_query($con, $qry);
                $numrow = mysqli_num_rows($res);
                if ($numrow > 0) {
                  ?>
                  <?php
                  while ($row = mysqli_fetch_assoc($res)) {
                    ?>
                    <div class="card">
                      <div class="video"><video width="100" src="<?= $row['profilepic'] ?>" class="video-source"
                          controls></video></div>
                      <div class="video-title">
                        <?= $row['emptitle'] ?>
                      </div>
                      <div class="video-desc">
                        <?= $row['empdesc'] ?>
                      </div>
                    </div>
                    <?php
                  }
                  ?>
                  <?php
                } else {
                  echo "Record Not Found";
                }
                ?>
              </div>
            </div>
          </div>
          <!-- category 8 -->
          <div id="tab-8" class="tab-content">
            <div class="container">
              <div class="my-vedio">
                <?php
                $qry = "SELECT * FROM selectcat WHERE selectcat='shorts'";
                $res = mysqli_query($con, $qry);
                $numrow = mysqli_num_rows($res);
                if ($numrow > 0) {
                  ?>
                  <?php
                  while ($row = mysqli_fetch_assoc($res)) {
                    ?>
                    <div class="card">
                      <div class="video"><video width="100" src="<?= $row['profilepic'] ?>" class="video-source"
                          controls></video></div>
                      <div class="video-title">
                        <?= $row['emptitle'] ?>
                      </div>
                      <div class="video-desc">
                        <?= $row['empdesc'] ?>
                      </div>
                    </div>
                    <?php
                  }
                  ?>
                  <?php
                } else {
                  echo "Record Not Found";
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- tabs end -->


    <!-- about start-->
    <section id="about" style="padding-top:150px ; padding-bottom:50px">
      <div class="container-fluid ">
        <div class="row about-container">
          <div class="col-md-12 co-head">

            <h2 class="Contact-header">About <span class="contact-us"> Us </span></h2>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="about-img">
              <img src="logo/about_banner.png" class="abt-img">
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 demo">
            <div class="about-summary ">
              <span> </span>
              <span> </span>
              <span> </span>
              <span> </span>
              <h3 class="about-title">Who We Are?</h3>
              <div class="about-desc">
                <p class="about-para"><b class="text-dark">"Welcome to JackPot Talkies</b> - the ultimate destination
                  for all things entertaining!
                  We're passionate about providing our viewers with the best content to keep them entertained and
                  engaged.
                </p>
                <p class="about-para">On our channel, you'll find a variety of videos that cater to different interests
                  and tastes. From Movies Review to heartwarming short films, from trending Videos we've got it all.
                  Our talented team of creators is dedicated to bringing you fresh and exciting content that will leave
                  you wanting more. We're constantly innovating and experimenting with new formats and ideas to keep
                  things interesting. </p>
                <p class="about-para">So, whether you're looking for a good laugh, a thought-provoking story, or just
                  some
                  other entertainment, you've come to the right place. Subscribe to our channel and join the JackPot
                  Talkies community today!"</p>
                <p class="about-para">Stay Happy <i class="fa fa-heart"></i> Stay Entertained</p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- about end-->

    <!-- our service -->
    <section id="service" style="padding-top:150px ; padding-bottom:50px">
      <sdiv class="service-grid pb-5 pt-5">
        <div class="container">
          <div class="row">
            <div class="col-xl-12 text-center mb-4">
              <div class="service-title">
                <h2 class="Contact-header">Our <span class="contact-us"> Services </span></h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 text-center mb-3">
              <div class="service-wrap">
                <div class="service-icon">
                  <!-- <i class="fas fa-layer-group"></i> -->
                </div>
                <h4>Celebrity Interviews</h4>
                <p>:Our team of experienced interviewers conducts exclusive interviews with celebrities,.</p>

              </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center mb-3">
              <div class="service-wrap">
                <div class="service-icon">
                  <!-- <i class="far fa-chart-bar"></i> -->
                </div>
                <h4>Cinema Updates</h4>
                <p>Our YouTube channel is dedicated to providing our viewers with the latest updates on everything
                  cinema-related.</p>
                <!-- <a href="#">Read More</a> -->
              </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center mb-3">
              <div class="service-wrap">
                <div class="service-icon">
                  <!-- <i class="fas fa-database"></i> -->
                </div>
                <h4>Movie Reviews</h4>
                <p>Our channel is dedicated to providing you with honest and public opinions on the latest movies in the
                  cinema.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center mb-3">
              <div class="service-wrap">
                <div class="service-icon">
                  <!-- <i class="fas fa-cogs"></i> -->
                </div>
                <h4>Public Issues</h4>
                <p>A social issue is a problem that affects many people within a society. It is a group of common
                  problems in present-day society and ones that many people strive to solve.</p>

              </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center mb-3">
              <div class="service-wrap">
                <div class="service-icon">
                  <!-- <i class="fas fa-chart-pie"></i> -->
                </div>
                <h4>Short Films</h4>
                <p>Discover a world of captivating storytelling with our collection of short films. our films offer
                  something for every viewer. Get ready to be entertained, moved, and inspired by our talented
                  filmmakers and artist..</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center mb-3">
              <div class="service-wrap">
                <div class="service-icon">
                  <!-- <i class="fas fa-thumbs-up"></i> -->
                </div>
                <h4>Random Videos</h4>
                <p>lacking a definite plan, purpose, or pattern. : made, done, or chosen at random. read random passages
                  from the book. : relating to, having, or being elements or events with definite probability of
                  occurrence.</p>
              </div>
            </div>
          </div>
        </div>
  </div>
  </section>

  <!---Team Members start----->


  <section class="team" id="team" style="padding-top:150px ; padding-bottom:50px">
    <div class="container text-center">
      <h2>Our
        <span>Team</span>
      </h2>
      <p>"Talent wins games, but teamwork and intelligence win championships." – ...
      </p>
      <div class="row">
        <!-- Box-1 -->
        <div class="col-lg-3 col-md-6">
          <div class="box">
            <div class="image">
              <img src="team002.png" alt="team" class="img-fluid">
              <div class="social-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
              </div>
              <div class="overlay"></div>
            </div>
            <h3>Vijay Lokesh</h3>
            <h4>Project Director</h4>
          </div>
        </div>
        <!-- Box-2 -->
        <div class="col-lg-3 col-md-6">
          <div class="box">
            <div class="image">
              <img src="team002.png" alt="team" class="img-fluid">
              <div class="social-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
              </div>
              <div class="overlay"></div>
            </div>
            <h3>Alwin</h3>
            <h4>Assistant Director</h4>
          </div>
        </div>
        <!-- Box-3 -->
        <div class="col-lg-3 col-md-6">
          <div class="box">
            <div class="image">
              <img src="team002.png" alt="team" class="img-fluid">
              <div class="social-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
              </div>
              <div class="overlay"></div>
            </div>
            <h3>Anitha</h3>
            <h4>Anchor</h4>
          </div>
        </div>
        <!-- Box-4 -->
        <div class="col-lg-3 col-md-6">
          <div class="box">
            <div class="image">
              <img src="team002.png" alt="team" class="img-fluid">
              <div class="social-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
              </div>
              <div class="overlay"></div>
            </div>
            <h3>Karthick</h3>
            <h4>Anchor</h4>
          </div>
        </div>

        <!-- <div class="col-lg-3 col-md-6">
          <div class="box">
            <div class="image">
              <img src="team002.png" alt="team" class="img-fluid">
              <div class="social-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
              </div>
              <div class="overlay"></div>
            </div>
            <h3>Bhuvenesh</h3>
            <h4>CameraMan/Editor</h4>
          </div>
        </div> -->
      </div>
    </div>
  </section>


  <!--Team Members End-->



  <!-- contact start-->
  <section id="contact" style="padding-top:120px ; padding-bottom:100px">
    <div class="container">
      <div class="row">
        <div class="col-md-12 co-head">
          <h2 class="Contact-header">Contact <span class="contact-us"> Us </span></h2>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="contact-us">
            <div class="cont-title">
              <h3 class="cont-head">Get In Touch</h3>
              <p class="gettouch">If Any Queries Please Contact Us.</p>
            </div>
            <div class="cont-address">
              <h4 class="cont-mainhead">Address:</h4>
              <p class="cont-add"><i class="fa fa-location"></i>Old No.6, New No.34,<br>
                Street No 57,<br>
                Venkataraman Nagar,<br>
                Korattur,
                <br>Chennai – 600 080.
              </p>
            </div>
            <div class="cont-phone">
              <h4 class="cont-mainhead">Phone:</h4>
              <p class="contact-number"><i class=" fa fa-phone "></i>987654321</p>
            </div>
            <div class="contact-mail">
              <h4 class="cont-mainhead">Email Address:</h4>
              <p class="cont-mail"><i class=" fa fa-envelope "></i> jackpottalkies@gmail.com</p>
            </div>

          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="contact-map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3885.82536611994!2d80.18039715188294!3d13.110247093051727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526388fdf24bbb%3A0x7ddf45d805564094!2s6%2C%2034%2C%20Street%20Number%2057%2C%20Venkatraman%20Nagar%2C%20Korattur%2C%20Chennai%2C%20Tamil%20Nadu%20600076!5e0!3m2!1sen!2sin!4v1677823170938!5m2!1sen!2sin"
              class="i-map" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- contact end-->

  <!-- footer start-->
  <section id="footer">
    <!--footer-->
    <footer class="padding_4x">
      <div class="flex">
        <section class="flex-content padding_1x">
          <h3>Top Products</h3>
          <a href="#">Managed Website</a>
          <a href="#">Manage Reputation</a>
          <a href="#">Power Tools</a>
          <a href="#">Marketing Service</a>
        </section>
        <section class="flex-content padding_1x">
          <h3>Quick Links</h3>
          <a href="#">Home</a>
          <a href="#">About</a>
          <a href="#">Services</a>
          <a href="#">contact</a>
        </section>
        <section class="flex-content padding_1x">
          <h3>Categories</h3>
          <a href="#">Celebrity Interviews</a>
          <a href="#">Short Films</a>
          <a href="#">Web Series</a>
          <a href="#">Random Videos</a>
          <a href="#">Cinema Updates</a>
          <a href="#">Movie Public Reviews</a>
          <a href="#">Public Issues Shows</a>
          <a href="#">Shorts</a>

        </section>
        <section class="flex-content padding_1x">
          <h3>Address</h3>
          <a href="#">Guides</a>
          <a href="#">Research</a>
          <a href="#">Experts</a>
          <a href="#">Agencies</a>
        </section>
        <!-- <section class="flex-content padding_1x">
      <h3>Newsletter</h3>
      <p>You can trust us. we only send promo offers,</p>
      <fieldset class="fixed_flex">
        <input type="email" name="newsletter" placeholder="Your Email Address">
        <button class="btn btn_2">Subscribe</button>
      </fieldset>
    </section> -->
      </div>
      <div class="flex">

        <section class="flex-content padding_1x">
          <a class="faa" href="https://www.youtube.com/@jackpottalkies/videos"><i class="fa fa-youtube-play"></i></a>
          <a class="faa" href="https://www.facebook.com/profile.php?id=100079482908702"><i
              class="fa fa-facebook"></i></a>
          <a class="faa" href="https://twitter.com/TalkiesJackpot"><i class="fa fa-twitter"></i></a>
          <a class="faa" href="https://www.instagram.com/jackpot_talkies/"><i class="fa fa-instagram"></i></a>

        </section>
        <section class="flex-content padding_1x">
          <p class="foo">© Jackpot Talkies @2023 - All Right Reserved. </p>
          <a href="https://www.myyakobu.com/" class="fooo">Designed By Yakobu Business Solutions</a>
        </section>
      </div>
    </footer>
  </section>
  <!-- footer end-->

  </div>


  <script>
    (function ($) { // Begin jQuery
      $(function () { // DOM ready
        // If a link has a dropdown, add sub menu toggle.
        $('nav ul li a:not(:only-child)').click(function (e) {
          $(this).siblings('.nav-dropdown').toggle();
          // Close one dropdown when selecting another
          $('.nav-dropdown').not($(this).siblings()).hide();
          e.stopPropagation();
        });
        // Clicking away from dropdown will remove the dropdown class
        $('html').click(function () {
          $('.nav-dropdown').hide();
        });
        // Toggle open and close nav styles on click
        $('#nav-toggle').click(function () {
          $('nav ul').slideToggle();
        });
        // Hamburger to X toggle
        $('#nav-toggle').on('click', function () {
          this.classList.toggle('active');
        });
      }); // end DOM ready
    })(jQuery); // end jQuery
  </script>
  <script>

    $('.tab-link').click(function () {

      var tabID = $(this).attr('data-tab');

      $(this).addClass('active').siblings().removeClass('active');

      $('#tab-' + tabID).addClass('active').siblings().removeClass('active');
    });
  </script>

  <script src="index.js"></script>



</body>

</html>