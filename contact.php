<?php
$page_name = 'CONTACT';

require 'includes/header.php';

// Handle page post
if (!empty($_POST['submit'])) {
    $name = htmlentities($_POST['name']);
    $subject = htmlentities($_POST['subject']);
    $message = htmlentities($_POST['message']);

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $email = $_POST['email'];
    } else {
        $email = '';
    }

    if ($email) {
        $headers = 'From: webmaster@jptaekwondo.com' . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

        mail('jonathan.n.klein@gmail.com', $subject, $message, $headers);
        $success = true;
    } else {
        $success = false;
    }
}
?>
<!-- Start contact -->
<section class="contact">
    <div class="container">
        <div class="row">
            <?php
            if (isset($success) && $success) {
                echo '<div class="alert alert-success">Message sent successfully!</div>';
            } elseif (isset($success) && !$success) {
                echo '<div class="alert alert-error">You must provide a valid email!</div>';
            } ?>

            <div class="span12">
                <div class="img-polaroid">
                    <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=JP+TaeKwonDo+Studios,+Boston,+MA&amp;aq=0&amp;oq=JP+Taekwon&amp;sll=27.698638,-83.804601&amp;sspn=16.087329,28.54248&amp;t=m&amp;ie=UTF8&amp;hq=JP+TaeKwonDo+Studios,&amp;hnear=Boston,+Suffolk,+Massachusetts&amp;ll=42.312227,-71.11448&amp;spn=0.005554,0.009141&amp;z=16&amp;output=embed&amp;iwloc=near"></iframe><br />
                    <small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=JP+TaeKwonDo+Studios,+Boston,+MA&amp;aq=0&amp;oq=JP+Taekwon&amp;sll=27.698638,-83.804601&amp;sspn=16.087329,28.54248&amp;t=m&amp;ie=UTF8&amp;hq=JP+TaeKwonDo+Studios,&amp;hnear=Boston,+Suffolk,+Massachusetts&amp;ll=42.312227,-71.11448&amp;spn=0.005554,0.009141&amp;z=16" style="color:#0000FF;text-align:left">View Larger Map</a></small>
                </div>
            </div>
            <div class="span4 our-office">
                <h4>OUR OFFICE</h4>
                <hr />
                <dl>
                     <dt>Our Office:</dt>
                     <dd>
                         <strong>JP Taekwondo</strong><br>
                         670 Centre St,<br />
                        Jamaica Plain, MA 02130
                     </dd>
                     <dt>Telephone:</dt>
                     <dd>
                         +1 617 477 3478
                     </dd>
                     <dt>E-mail:</dt>
                     <dd><a href="mailto:jptaekwondo@gmail.com">jptaekwondo@gmail.com</a></dd>
                 </dl>
            </div>
            <div class="span8 contact-form">
                <h4>SEND US A MESSAGE</h4>
                <hr>
                <form method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
                    <div class="row">
                        <div class="span4">
                            <label>Name</label>
                            <input class="span4" type="text" name="name">
                        </div>
                        <div class="span4">
                            <label>E-mail</label>
                            <input class="span4" type="email" name="email">
                        </div>
                        <div class="span8">
                            <label>Subject</label>
                            <input class="span8" type="text" name="subject">
                        </div>
                        <div class="span8">
                            <label>Message</label>
                            <textarea class="span8" rows="8" name="message"></textarea>
                        </div>
                        <div class="span8">
                            <input type="submit" name="submit" value="Submit Message" class="btn btn-success" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End contact -->

<?php
require 'includes/footer.php';
?>