<?php 
/*
* Template Name: - Media
*/
get_header(); ?>

<!-- Portfolio section -->
<section class="portfolio-agileinfo" id="portfolio">
    <div class="container">
        <h1 class="section-heading">Gallery</h1>
        <p class="details">See it yourself. </p>
        <div id="grid-gallery" class="grid-gallery">
            <section class="grid-wrap">
                <ul class="grid">
                  <?php
                  // $ourCurrentpage = get_query_var('paged');
                  $gallery = new WP_Query(array
                    (
                      'post_type' => 'gallery',
                      'posts_per_page' => '100'
                      // 'paged' => $ourCurrentpage
                    ));
            
                    if ($gallery->have_posts() ) : while ($gallery->have_posts() ) : $gallery->the_post();

                    $img = get_field('upload');?>

                    <li data-aos="zoom-in">
                        <figure>
                            <img src="<?php echo $img['url']?>" class="img-responsive"/>
                        </figure>
                    </li>

                    <?php endwhile;
                        // echo paginate_links(array(
                        //     'total' => $products->max_num_pages
                        // ));
                    endif; wp_reset_query(); ?>
                </ul>
            </section>
           
            <section class="slideshow">
                <ul>
                 <?php
                 // $ourCurrentpage = get_query_var('paged');
                 $gallery = new WP_Query(array
                    (
                      'post_type' => 'gallery',
                      'posts_per_page' => '100'
                      // 'paged' => $ourCurrentpage
                    ));

                    if ($gallery->have_posts() ) : while ($gallery->have_posts() ) : $gallery->the_post();

                    $img = get_field('upload');?>
                    <li>
                        <figure>
                            <figcaption>
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo get_field('description')?></p>
                            </figcaption>
                            <img src="<?php echo $img['url']?>" class="img-responsive"/>
                        </figure>
                    </li>
                    <?php endwhile;
                    // echo paginate_links(array(
                    // 'total' => $products->max_num_pages
                    // ));
                    endif; wp_reset_query(); ?>
                </ul>
                <nav>
                    <span class="icon nav-prev"></span>
                    <span class="icon nav-next"></span>
                    <span class="icon nav-close"></span>
                </nav>
            </section>
        </div>
        <!-- End Grid Gallery -->
    </div>
    <!-- End container -->
</section>
<!-- End Portfolio Section -->

<?php get_footer(); ?>