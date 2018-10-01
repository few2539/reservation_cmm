<!-- jQuery -->
<!-- <script src="<?php echo base_url();?>assets/main/js/jquery.js"></script> -->

<!-- Bootstrap Core JavaScript -->
<!-- <script src="<?php echo base_url();?>assets/main/js/bootstrap.min.js"></script> -->

<!-- Librarys Base on Bootstrap -->
<script src="<?php echo base_url();?>assets/frontend/dist/styles/js/main.js"></script>

<script>
    (function ($) { // Begin jQuery
        $(function () { // DOM ready
            // If a link has a dropdown, add sub menu toggle.
            $('nav ul li a:not(:only-child)').click(function (e) {
                e.preventDefault();
                $(this).siblings('.nav-dropdown').toggle();
                // Close one dropdown when selecting another
                $('.nav-dropdown').not($(this).siblings()).hide();
                e.stopPropagation();
            });
            // Clicking away from dropdown will remove the dropdown class
            $('html').click(function () {
                $('.nav-dropdown').hide();
            });
            // Toggle open and close nav styles on click
            $('#nav-toggle').click(function () {
                $('nav ul').slideToggle();
            });
            // Hamburger to X toggle
            $('#nav-toggle').on('click', function () {
                this.classList.toggle('active');
            });
        }); // end DOM ready
    })(jQuery); // end jQuery
</script>
