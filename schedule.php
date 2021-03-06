<?php

$page_name = 'Summer Schedule - July 11th to September 2nd 2016';
$secondary_header = 'Fall Schedule - September 6th, 2016 to February 4th, 2017';

require 'includes/header.php';
?>
<section class="schedule">
    <div class="container">
        <div class="row">
            <table class="grid_schedule">
                <tr>
                    <th>&nbsp;</th>
                    <th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th>
                    <th>Thursday</th>
                    <th>Friday</th>
                    <th>Saturday</th>
                </tr>
                <tr>
                    <td colspan="7">
                        <h1>Summer Taekwondo</h1>
                        9:00am - 1pm (Half day)<br/>
                        9:00am - 3:20pm (Full day)<br/>
                        One Session is two weeks<br/>
                        <a href="summer.php">Sign up now!</a>
                    </td>
                </tr>
                <tr>
                    <td>11:00-12:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="adult">Adults &amp; Teens</td>
                </tr>
                <tr class="blank">
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="birthday" rowspan="6">
                        Birthday Party<br/>Available<br/><br/>
                        <img src="assets/cake.png" height="100px" width="100px" /><br/><br/>
                        Ask<br/>
                        For Details<br/>
                    </td>
                </tr>
                <tr>
                    <td>4:30-5:10</td>
                    <td class="under_seven">Little Tigers<br />(under 7 years old)</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>5:15-6:00</td>
                    <td class="kids_a">Youth</td>
                    <td></td>
                    <td></td>
                    <td class="kids_a">Youth</td>
                    <td></td>
                </tr>
                <tr>
                    <td>6:10-7:10</td>
                    <td class="adult">Adults &amp; Teens</td>
                    <td></td>
                    <td></td>
                    <td class="adult">Adults &amp; Teens</td>
                    <td></td>
                </tr>
            </table>

            <div class="container section-page-header">
                <div class="row">
                    <div class="span12">
                        <div class="page-header">
                            <h4>— <?=$secondary_header;?> —</h4>
                        </div>
                    </div>
                </div>
            </div>

            <table class="grid_schedule">
                <tr>
                    <th>&nbsp;</th>
                    <th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th>
                    <th>Thursday</th>
                    <th>Friday</th>
                    <th>Saturday</th>
                </tr>
                <tr>
                    <td>10:15-11:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Family Class (TBD)</td>
                </tr>
                <tr>
                    <td>11:00-12:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="adult">Adults &amp; Teens</td>
                </tr>
                <tr class="blank">
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="birthday" rowspan="6">
                        Birthday Party<br/>Available<br/><br/>
                        <img src="assets/cake.png" height="100px" width="100px" /><br/><br/>
                        Ask<br/>
                        For Details<br/>
                    </td>
                </tr>
                <tr>
                    <td rowspan="4">3:50-7:20</td>
                    <td class="kids_a">Youth<br />(3:45-4:30)</td>
                    <td class="little_tigers_a">Little Tigers A<br />(4:00-4:30)</td>
                    <td class="under_seven">Little Tigers<br />(3:50-4:30)</td>
                    <td class="kids_a">Youth<br />(3:50-4:35)</td>
                </tr>
                <tr>
                    <td class="youth_adv_a">Youth Advanced A<br/>(4:30-5:15)</td>
                    <td class="kids_a">Youth<br/>(4:30-5:15)</td>
                    <td class="kids_a">Youth<br/>(4:30-5:15)</td>
                    <td class="under_seven">Little Tigers<br />(4:35-5:15)</td>
                    <td>Beginner<br/>Private</td>
                </tr>
                <tr>
                    <td class="youth_adv_b">Youth Advanced B<br/>(5:15-6:00)</td>
                    <td class="youth_adv">Youth Advanced<br/>(5:15-6:00)</td>
                    <td class="youth_adv">Youth Advanced<br/>(5:15-6:00)</td>
                    <td class="youth_adv_a">Youth Advanced A<br/>(5:15-6:00)</td>
                    <td></td>
                </tr>
                <tr>
                    <td class="adult">Adults &amp; Teens<br/>(6:00-7:00)</td>
                    <td></td>
                    <td class="adult">Adults &amp; Teens<br/>(6:00-7:00)</td>
                    <td class="youth_adv_b">Youth Advanced B<br/>(6:00-6:45)</td>
                </tr>
            </table>
        </div>
    </div>
</section>

<?php
require 'includes/footer.php';
?>