<!-- Footer -->
<div class="footer">
    <style type="text/css">
        {
            background-image: url("<?php echo get_template_directory_uri() . '/assets/images/footer.png'?>");
        }
    </style>

    <div class="container">
        <h3><center>Contact Us</center></h3>
        
      
        <!--End subscribe-form-->
       
        <div class="col-md-8 col-sm-12 footer-grid footer-grid-1 address">
            <h4>Contact</h4>
            <?php echo ot_get_option('contact_details');?>
        </div>
        <!--end col-md-12 col-sm-3 footer-grid footer-grid-1 address-->

        <div class="col-md-4 col-sm-12 col-xs-12 social-icons">
            <h3><center>Follow Us On</center></h3>
                <ul class="list-inline social-icons">
                    <li>
                        <a href="<?php echo ot_get_option('facebook');?>"><center><i class="fa fa-facebook"></i></center></a>
                    </li>
                    <li>
                        <a href="<?php echo ot_get_option('twitter');?>"><center><i class="fa fa-twitter"></center></i></a>
                    </li>
                    <li>
                        <a href="<?php echo ot_get_option('linked_in');?>"><center><i class="fa fa-linkedin-square"></center></i></a>
                    </li>
                    <li>
                        <a href="<?php echo ot_get_option('instagram');?>"><center><i class="fa fa-instagram"></center></i></a>
                    </li>
                </ul>
        </div>
    </div>

    <div class="copyright">
        <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?> | All Rights Reserved | Designed by <a href="http://www.socialaves.com/" target="_blank"> Social Aves </a>
    </div>
    
</div>
<!-- End Footer -->

<?php wp_footer(); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/cbpGridGallery.js"></script>

  <script>
      new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
  </script>
  <script>
    window.sr = ScrollReveal();
    // sr.reveal('.navbar', {
    //   duration: 2000,
    //   origin:'bottom'
    // });
    sr.reveal('.logo', {
      duration: 2000,
      origin:'top',
      distance:'300px',
    });
    sr.reveal('.header-social-icons', {
      duration: 2000,
      origin:'top',
      distance:'300px'
    });
    sr.reveal('.fa-stack', {
      duration: 2000,
      origin:'top'
    });
    sr.reveal('.text-muted', {
      duration: 2000,
      origin:'bottom'
    });
    sr.reveal('.h1', {
      duration: 2000,
      origin:'top',
      distance:'300px',
      viewFactor: 0.2
    });
    sr.reveal('.h2', {
      duration: 2000,
      origin:'top'
    });
    sr.reveal('.para', {
      duration: 2000,
      origin:'bottom',
      distance:'300px',
      viewFactor: 0.2
    });
    
    sr.reveal('.footer-grid', {
      duration: 2000,
      origin:'bottom',
      distance:'300px',
      viewFactor: 0.2
    });
    sr.reveal('.social-icons', {
      duration: 2000,
      origin:'bottom',
      distance:'300px',
      viewFactor: 0.2
    });
  </script>



    <script>
      $(document).ready(function(){
        $('.navbar-toggle').on('click', function(){
          if ($('.collapse').css('display') == 'none') {
           $('.collapse').show(); 
          } else{
            $('.collapse').hide();
            }
          });
        });
    </script>
</html>
