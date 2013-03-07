        <!-- Start footer -->
        <footer class="footer">
            <div class="container">
                 <div class="row text-center">
                     <h5>Copyright &copy; <?php echo date('Y');?> JP TKD STUDIO</h5>
                     <h5>+1 617 477 3478</h5>
                     <h5><a href="mailto:jptaekwondo@gmail.com">jptaekwondo@gmail.com</a></h5>
                 </div>
            </div>
        </footer>
        <!-- End footer -->

        <script src="assets/rounde_bootstrap/js/jquery-1.8.3.js"></script>
        <script src="assets/rounde_bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/rounde_bootstrap/js/jquery.onecarousel.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#myCarousel').oneCarousel({
                    easeIn: 'rotateIn',
                    interval: 5000,
                    pause: 'hover'
                });

                // update columnWidth on window resize
                $(window).smartresize(function () {
                    $container.isotope('reLayout');
                });
            });
        </script>

    </body>
</html>