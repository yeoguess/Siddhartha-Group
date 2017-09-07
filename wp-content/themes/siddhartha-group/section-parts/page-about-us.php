<?php
/*
* Template Name: - About Us
*/
get_header(); ?>
<style type="text/css">
body{
background-image: url("<?php echo get_template_directory_uri() . '/assets/images/about-background.png'?>");
/*margin: 100px 100px 100px 100px;*/
}
</style>
<div class="container">
    <ul class="nav nav-tabs nav-stacked col-md-2">
        <li><a data-toggle="tab" href="#about">About Us</a></li>
        <li><a data-toggle="tab" href="#menu1">Our Company</a></li>
        <li><a data-toggle="tab" href="#menu2">Our Management</a></li>
        <li><a data-toggle="tab" href="#menu3">Our Mission</a></li>
        <li><a data-toggle="tab" href="#menu4">Our Values</a></li>
    </ul>
    <div class="col-md-4">
        <div class="about-page-image">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/portfolio-img1.jpg'?>" class="img-rounded">
        </div>
    </div>
    <div class="tab-content col-md-6">
        <div id="about" class="tab-pane fade in active">
            <h3>About Us</h3>
            <p><?php echo ot_get_option('about_us');?></p>
        </div>
        <div id="menu1" class="tab-pane fade">
            <h3>Our Company</h3>
            <p><?php echo ot_get_option('our_company');?></p>
        </div>
        <div id="menu2" class="tab-pane fade">
            <h3>Our Management</h3>
            <p><?php echo ot_get_option('our_management');?></p>
        </div>
        <div id="menu3" class="tab-pane fade">
            <h3>Our Mission</h3>
            <p><?php echo ot_get_option('our_mission');?></p>
        </div>
        <div id="menu4" class="tab-pane fade">
            <h3>Our Values</h3>
            <p> <?php echo ot_get_option('our_values');?></p>
        </div>
    </div>
</div>
<?php get_footer(); ?>