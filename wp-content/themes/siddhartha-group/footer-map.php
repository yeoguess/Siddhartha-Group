<!-- Footer -->
<div class="footer-contact">
  <style type="text/css">
    {
      background-image: url("<?php echo get_template_directory_uri() . '/assets/images/footer.png'?>");
    }
  </style>
  <div class="container">
    <h3><center>Contact Us</center></h3>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="subscribe-form">
        <!--start-contact-->
        <div class="contact-text">
          <input type="text" name="name" value="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}"/>
          <input type="text" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"/>
          <textarea value="Message:" name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message..</textarea>
          <div class="contact-but">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </div>
          <!--End contact-but-->
        </div>
        <!--End contact-text-->
      </div>
      <!--End subscribe-form-->
    </form>
    <div class="contact-top">
       <?php echo ot_get_option('contact_us');?>
    </div>

  <div class="col-md-8 col-sm-3 footer-grid footer-grid-1 address">
      <h4>Contact</h4>
      <?php echo ot_get_option('contact_details');?>
  </div>
  <!--end col-md-12 col-sm-3 footer-grid footer-grid-1 address-->

  <div class="col-md-4 col-sm-3 social-icons">
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

</html>
