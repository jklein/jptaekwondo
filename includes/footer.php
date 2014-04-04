        <!-- Start footer -->
        <footer class="footer">
            <div class="container">
                 <div class="row text-center">
                     <h5>Copyright &copy; <?php echo date('Y');?> JP TKD STUDIO</h5>
                     <h5><?=$phone_number;?></h5>
                     <h5><a href="mailto:jptaekwondo@gmail.com">jptaekwondo@gmail.com</a></h5>
                 </div>
            </div>
        </footer>
        <!-- End footer -->

        <script src="assets/rounde_bootstrap/js/jquery-1.8.3.min.js"></script>
        <script src="assets/rounde_bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                // update columnWidth on window resize
                $(window).smartresize(function () {
                    $container.isotope('reLayout');
                });
            });

            $('body').on('touchstart.dropdown', '.dropdown-menu', function (e) { e.stopPropagation(); });
        </script>

    </body>
</html>