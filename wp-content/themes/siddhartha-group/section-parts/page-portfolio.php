<?php 
/*
* Template Name: - Portfolio
*/
get_header(); ?>
<div class="banner-top">
    <?php $img = get_field('banner_image'); ?>
    <img src="<?php echo $img['url']?>">
</div>

<!--breadcrumb start-->
<div class="breadcrumb-wrapper">
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>
</div>
<!--end breadcrumb-->
<div class="container">
<div class="col-md-1 logo">
    <?php $img = get_field('logo'); ?>
    <img src="<?php echo $img['url']?>">
</div>

<div class="col-md-11">
    <div class="portfolio-details">
        <?php while(have_posts()): the_post(); ?>
            <?php the_content();?>
        <?php endwhile ?>
    </div>
</div>
</div>

<?php get_footer(); ?>