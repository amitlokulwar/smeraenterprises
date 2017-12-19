<?php get_header(); ?>

<section>
	<div class="breadcrumbs img-v1 text-center">
		<div class="container">
			<h1><?php the_title(); ?></h1>
			<!-- <p>Unify is a clean and fully responsive</p> -->
		</div>
	</div>

	<div class="container innr_page">
	    <div class="row">
	    	<div class="col-md-12">
	    		<?php the_content(); ?>
	    	</div>
	    </div>
	</div>
</section>

 
 
<?php //get_sidebar(); ?>   
<?php get_footer(); ?>