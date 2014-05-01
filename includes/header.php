<?php
$page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], '/') + 1);

$phone_number = '+1 617 784 6882';

date_default_timezone_set('America/New_York');

?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <meta name="description" content="JP Taekwondo is the premier Martial Arts Studio in Jamaica Plain.">
        <meta name="keywords" content="TKD,Taekwondo,Jamaica Plain,Martial Arts">

        <title>JP Taekwondo</title>

        <link href="assets/rounde_bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="assets/rounde_bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="assets/rounde_bootstrap/css/style.css" rel="stylesheet">
        <link rel="icon" href="/favicon.ico" type="image/x-icon" />

        <script>
        <?php
        if ($page == 'contact.php') { ?>
            (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        <?php
        } ?>

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-39188570-1']);
            _gaq.push(['_trackPageview']);

            (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </head>
    <body>
        <div id="fb-root"></div>
        <!-- Start header -->
        <header class="header">
            <div class="container">
                <div class="navbar">
                    <div class="navbar-inner">
                        <div class="brand-wrapper">
                            <a class="brand" href="index.php"><img src="assets/jptkd_logo.png" /></a>
                        </div>
                        <ul class="nav">
                            <li <?php echo ($page == 'index.php' ? 'class="active"' : '');?>>
                                <a href="index.php">Home</a>
                            </li>
                            <li class="dropdown" <?php echo ($page == 'instructor.php' || $page == 'studio.php' ? 'class="active"' : '');?>>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Who We Are <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="instructor.php">Instructor</a></li>
                                    <li><a href="studio.php">Studio</a></li>
                                </ul>
                            </li>
                            <li class="dropdown" <?php echo ($page == 'context.php' || $page == 'philosophy.php' ? 'class="active"' : '');?>>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Why Train With Us <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="context.php">JP TKD In Context</a></li>
                                    <li><a href="philosophy.php">Philosophy</a></li>
                                    <li><a href="curriculum.php">Curriculum</a></li>
                                </ul>
                            </li>
                            <li class="dropdown" <?php echo ($page == 'schedule.php' ? 'class="active"' : '');?>>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Schedules <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="schedule.php">Standard Schedule</a></li>
                                </ul>
                            </li>
                            <li class="dropdown" <?php echo ($page == 'summer_2013.php' ? 'class="active"' : '');?>>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Image Gallery<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="summer_2013.php">Summer 2013</a></li>
                                </ul>
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
        <?php
        if (!empty($page_name)) { ?>
            <section class="section-page-header">
                <div class="container">
                    <div class="row">
                        <div class="span12">
                            <div class="page-header">
                                <h4>— <?php echo $page_name; ?> —</h4>
                            </div>
                        </div>
                    </div>
                    <?php
                    if ($page != 'schedule.php'
                        && $page != 'contact.php') {
                        echo '<img src="assets/rounde_bootstrap/images/divider_shadow.png" />';
                    }
                    ?>
                </div>
            </section>
            <?php
        } ?>
        <!-- End page header -->
