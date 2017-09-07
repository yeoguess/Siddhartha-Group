<!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Mission</h2>
                    <p class="text-muted">To provide outstanding products and services through
                    dedication and excellence.</p>
                </div>
            </div>
            
            <div class="row text-center">
                
                <?php $missions = new WP_Query(array
                        (
                          'post_type' => 'mission',
                          'posts_per_page' => '10',
                          'order' => 'ASC'
                        ));
                    
                    if ($missions->have_posts() ) : while ($missions->have_posts() ) : $missions->the_post(); ?>

                <div class="col-md-4 col-sm-6 col-xs-12">
                   <!-- <?php echo get_field('icon'); ?> -->
                   <span class="fa-stack fa-4x">
                        <?php $img = get_field('icon'); ?>
                        <img src="<?php echo $img['url']?>">
                    </span>
                    <h4 class="service-heading"><?php the_title('subscribe'); ?></h4>
                    <p class="text-muted"><?php echo get_field('details')?></p>
                </div>

                <?php endwhile; endif; wp_reset_query(); ?>
            
            </div>
        </div>
    </section>


