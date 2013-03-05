<?php
$page_name = 'HOME';

require 'includes/header.php';
?>

<!-- Start slider -->
<section class="slider">
    <div class="container">
        <div class="well">
            <div id="myCarousel" class="carousel slide">
                <div class="carousel-inner">
                    <div class="active item">
                        <img src="assets/rounde_bootstrap/images/slides/slide_1.jpg" />
                        <div class="carousel-caption animation">
                            <h3 data-animate="fadeInDownBig" class="caption-black">Simple and Clean Design</h3>
                            <p data-animate="fadeInRightBig" class="caption-black-small">Sed posuere consectetur est at lobortis.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/rounde_bootstrap/images/slides/slide_2.jpg" />
                        <div class="carousel-caption animation">
                            <h3 data-animate="fadeInLeftBig" class="caption-white">Fully Responsive Layout</h3>
                            <p data-animate="fadeInRightBig" class="caption-white-small">Sed posuere consectetur est at lobortis.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/rounde_bootstrap/images/slides/slide_3.jpg" />
                        <div class="carousel-caption animation">
                            <h3 data-animate="rotateIn" class="caption-black">HTML5 and CSS3 Technology</h3>
                            <p data-animate="rollIn" class="caption-black-small">Sed posuere consectetur est at lobortis.</p>
                        </div>
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