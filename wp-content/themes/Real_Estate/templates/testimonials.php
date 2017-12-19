<?php
/**
 * Template Name: Testimonials 
 *
 */
 ?>
<?php get_header(); ?>

<section>
    <div class="breadcrumbs img-v1 text-center">
        <div class="container">
            <h1><?php the_title(); ?></h1>
            <!-- <p>Unify is a clean and fully responsive</p> -->
        </div>
    </div>

</section>
<section class="testimonials_area">
        <div class="container">
                        <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="testimonial-slider owl-carousel owl-theme">
                        <?php
                        $args = array( 'posts_per_page' => -1, 'post_type' => 'testimonials', 'order' => 'ASC' , 'orderby' => 'date');
                        $myposts = get_posts( $args );
                        foreach ( $myposts as $post ) : setup_postdata( $post ); 
                        $url=get_permalink($post->ID);
                        ?>
                        <div class="item">
                            <div class="slider_content text-center">
                                <?php echo get_the_post_thumbnail( $post->ID, 'full', array( 'class' => 'img-responsive' ) );?>
                                <div class="testimonials-title">
                                    <p><?php the_title();?></p>
                                    <!-- <span>UI Designer, Apple</span> -->
                                </div>
                                <p><?php the_content();?></p>
                            </div> 
                        </div>
                    <?php endforeach;?>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

 
 
<?php //get_sidebar(); ?>   
<?php get_footer(); ?>