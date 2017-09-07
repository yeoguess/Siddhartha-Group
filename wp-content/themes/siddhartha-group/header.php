<?php session_start(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="<?php bloginfo('description'); ?>">

        <title>
          <?php bloginfo('name'); ?> |
          <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
        </title>
        
        <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <?php wp_head(); ?>
        <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    </head>
    <!-- Main Header -->
    <header class="main-header">
       

        <!--Header upper-->
        <div class="header-upper" id="home">
            <div class="auto-container">
                <div class="clearfix">
                    <!--Logo-->
                    <div class="pull-left logo-outer">
                        <div class="logo">
                            <a href="<?php echo get_site_url(); ?>"><?php echo ot_get_option('header_logo');?></a>
                        </div>
                    </div>
                    <!-- End Logo -->
                    
                    <!--Upper Right-->
                    <div class="pull-right upper-right">
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <ul class="list-inline header-social-icons">
                                    <li>
                                        <a href="<?php echo ot_get_option('facebook');?>"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo ot_get_option('twitter');?>"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo ot_get_option('linked_in');?>"><i class="fa fa-linkedin-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo ot_get_option('instagram');?>"><i class="fa fa-instagram"></i></a>
                                    </li>
                                </ul>
                                <?php get_search_form(); ?>
                            </div>
                        </form>
                    </div>
                    <!-- End Upper Right -->
                </div>
                <!-- End Clearfix -->
            </div>
            <!-- End auto-container -->
        </div>
        <!--End header upper-->

        <!--Header Lower-->
        <div class="header-lower">
            <!-- Navigation -->
            <nav id="mainNav" class="navbar navbar-default navbar-inverse">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <?php wp_nav_menu( array(
                            'menu'              => 'primary',
                            'theme_location'    => 'primary',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse',
                            'container_id'      => 'bs-example-navbar-collapse-1',
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker())
                            );
                        ?>
                    </ul>
                </div>
            </nav>
        </div>
        <!--End header lower-->
       