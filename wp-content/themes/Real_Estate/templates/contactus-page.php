<?php
/**
 * Template Name: Contact Us
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

<section class="contact_area">
	<div class="container innr_page">
		<?php the_content();?>
	</div>
</section>
 
<?php get_footer(); ?>