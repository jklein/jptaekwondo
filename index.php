<?php
require 'includes/header.php';
?>
<!-- Start welcome-message -->
<section class="welcome-message">
    <div class="container">
        <div class="hero-unit">
            <h4>Welcome to the home of JP Taekwondo!<br> <small>We hope you find everything you need.  If not, use the contact form to get in touch with us.</small></h4>
        </div>
    </div>
</section>
<!-- End welcome-message -->

<!-- Start slider -->
<section class="slider">
    <div class="container">
        <div class="well">
            <div id="myCarousel" class="carousel slide">
                <div class="carousel-inner">
                    <div class="active item">
                        <img src="assets/jptkd02.jpg" />
                    </div>
                    <div class="item">
                        <img src="assets/jptkd18.jpg" />
                    </div>
                    <div class="item">
                        <img src="assets/jptkd29.jpg" />
                    </div>
                </div>
                <!-- Carousel nav -->
                <a class="carousel-control left" href="#myCarousel" data-slide="prev"><i class="icon-chevron-left"></i></a>
                <a class="carousel-control right" href="#myCarousel" data-slide="next"><i class="icon-chevron-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- End slider -->

<?php

require 'includes/footer.php';
?>