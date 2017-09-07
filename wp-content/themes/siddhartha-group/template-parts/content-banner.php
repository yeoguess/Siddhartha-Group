<style type="text/css">
    .intro-text{
        background-image:url("<?php echo get_template_directory_uri() .  '/assets/images/header-bg.png'?>");
        background-size: 100%;
        height: auto;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-position:135px -200px;
        text-align:center;
        color:#fff;
        margin-top: -20px;
        height: auto;
        background-repeat:no-repeat;
        background-position: center ;
        box-shadow: 5px 5px 50px black;
        position: relative;
        z-index: -1;
        min-height: 461px;
    }
    .intro-text img{
        /*height: 50px!important;*/
        /*width: 100%;*/
        /*height: auto;*/
    }
    @media only screen and (max-width: 500px) {
    body {
        /*background-color: lightblue;*/
    }
}
</style>

    <?php while(have_posts()): the_post(); ?>
    <?php the_content();?>
    <?php endwhile ?>

</header>
<!--End Main Header-->