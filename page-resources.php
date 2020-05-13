<?php
/*
Template Name: Page - Resources
*/
get_header(); ?>
	
	<?php get_template_part('templates/area--head-main'); ?>

	<div class="content">
		<main class="main">

			<section class="area--bg-white">
				<div class="grid-container">

		            <div class="grid-x grid-margin-x" id="masonryContainer">
		            	
                		<?php
				        $args=array(
				            'post_type' => 'resource',
				            'post_status' => 'publish',
				            'order' => 'desc'
				        );
				        $my_query = null;
				        $my_query = new WP_Query($args);
				        if( $my_query->have_posts() ) {
				        while ($my_query->have_posts()) : $my_query->the_post(); ?>

				        	<div class="masonry-brick cell small-12 medium-4 large-3">
		            			<?php get_template_part('templates/block--resource'); ?>
		            		</div>

				    	<?php endwhile; }
				    	wp_reset_query(); ?>
				    	
				   	</div>

			    </div>
		    </section>

		</main>
	</div> <!-- end #content -->

	<script src="<?php echo get_template_directory_uri(); ?>/js/masonry.pkgd.min.js"></script>
	<script>
	    $(window).load(function(){
	        $('#masonryContainer').masonry({  
	        itemSelector: '.masonry-brick'
	        });
	    });
	</script>

<?php get_footer(); ?>