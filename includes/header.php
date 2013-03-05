<?php
$page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], '/') + 1);

?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>JP Taekwondo</title>

        <link href="assets/rounde_bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="assets/rounde_bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="assets/rounde_bootstrap/css/style.css" rel="stylesheet">
        <link href="assets/rounde_bootstrap/css/font-awesome.css" rel="stylesheet">
        <link href="assets/rounde_bootstrap/css/animate.css" rel="stylesheet">
        <link href="assets/rounde_bootstrap/css/prettyPhoto.css" rel="stylesheet">

    </head>
    <body>
        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
                debugger;
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        <!-- Start header -->
        <header class="header">
            <div class="container">
                <div class="navbar">
                    <div class="navbar-inner">
                        <div class="brand-wrapper">
                            <a class="brand" href="index.php"><img src="assets/jptkd_logo.gif" /></a>
                        </div>
                        <ul class="nav">
                            <li <?php echo ($page == 'index.php' ? 'class="active"' : '');?>>
                                <a href="index.php">Home</a>
                            </li>
                            <li <?php echo ($page == 'schedule.php' ? 'class="active"' : '');?>>
                                <a href="schedule.php">Schedule</a>
                            </li>
                            <li <?php echo ($page == 'instructor.php' ? 'class="active"' : '');?>>
                                <a href="instructor.php">Instructor</a>
                            </li>
                            <li <?php echo ($page == 'announcements.php' ? 'class="active"' : '');?>>
                                <a href="announcements.php">Announcements</a>
                            </li>
                            <li <?php echo ($page == 'contact.php' ? 'class="active"' : '');?>>
                                <a href="contact.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- End header -->

        <!-- Start page header -->
        <section class="section-page-header">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="page-header">
                            <h4>— <?php echo $page_name; ?> —</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End page header -->