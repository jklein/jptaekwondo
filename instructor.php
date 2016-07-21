<?php
$page_name = 'ABOUT MASTER JANG';

require 'includes/header.php';

$years_old =  date_diff(date_create(), date_create('February 1st, 2010'))->format('%y-year-old');
?>

<div class="container">
    <div class="row instructor_bio">
        <img src="assets/master_jang_portrait.jpg" class="img-polaroid img-left" />
        <p>Master Inkwon Jang is a 7th degree black belt and certified instructor from World
        Taekwondo Headquarters. He also is a 4th degree black belt in Hapkido and a black
        belt in Wushu. He graduated valedictorian at Kyunghee University (one of South
        Korea’s leading institutions for taekwondo theory and practice) with a degree in
        Taekwondo and a minor in Education and has spent the past 20 years training,
        performing, and teaching. Master Jang has won the World Taekwondo Hanmadang
        in 1997 and 1999 and has trained and performed with Kyunghee University’s
        Demonstration and Sparring Team, the Korean National Demonstration Team, and
        the Korean Tigers Demonstration Team. He has taught students of all ages, from
        children and youth (Namsan International Kindergarten, Yongsan International School) to university
        students and professionals (Yonsei University, UC-Berkeley, Brown University, Icelandic National Team).
        He currently teaches the <a href="http://www.hcs.harvard.edu/~htkd/">Harvard University Taekwondo Club</a>
        in addition to his private studio.</p>

        <p>Master Jang lives in West Roxbury with his wife and <?php echo $years_old;?> daughter. When not teaching, he
        enjoys spending time with his family, fiddling around with his MacBook Pro, and playing the electric
        guitar.</p>
    </div>
    <p class="c"></p>
</div>


<?php

require 'includes/footer.php';
?>