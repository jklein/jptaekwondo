<?php
$page_name = 'SCHEDULE';

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
                    <td>11:00-12:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="adult">Adult</td>
                </tr>
                <tr class="blank">
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>15:50-16:30</td>
                    <td class="under_seven">Under 7 Years Old</td>
                    <td></td>
                    <td class="under_seven">Under 7 Years Old</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>16:30-17:15</td>
                    <td class="kids_a">Kids A</td>
                    <td class="under_seven">Under 7 Years Old</td>
                    <td class="kids_a">Kids A</td>
                    <td class="under_seven">Under 7 Years Old</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>17:15-18:00</td>
                    <td></td>
                    <td class="kids_b">Kids B</td>
                    <td></td>
                    <td class="kids_b">Kids B</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>18:00-19:00</td>
                    <td class="adult">Adult</td>
                    <td class="kids_c">Kids C</td>
                    <td></td>
                    <td class="kids_c">Kids C</td>
                    <td class="adult_sparring">Adult Sparring</td>
                    <td></td>
                </tr>
                <tr>
                    <td>19:00-20:00</td>
                    <td></td>
                    <td class="adult">Adult</td>
                    <td></td>
                    <td class="adult">Adult</td>
                    <td></td>
                    <td></td>
                </tr>
            </table>

        </div>
    </div>
</section>

<?php
require 'includes/footer.php';
?>