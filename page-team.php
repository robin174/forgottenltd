<?php
/*
Template Name: Page - Team
*/
get_header(); ?>
	
	<?php get_template_part('templates/area--head-main'); ?>

	<div class="content">
		<main class="main">

			<section class="area--bg-white">
				<div class="grid-container">
		            <div class="grid-x grid-margin-x small-up-1 medium-up-3 large-up-3">

                		<?php
				        $args=array(
				            'post_type' => 'team',
				            'post_status' => 'publish',
				            'orderby' => 'title',
    						'order'   => 'ASC'
				        );
				        $my_query = null;
				        $my_query = new WP_Query($args);
				        if( $my_query->have_posts() ) {
				        while ($my_query->have_posts()) : $my_query->the_post(); ?>
		            		<?php get_template_part('templates/block--team'); ?>
				    	<?php endwhile; }
				    	wp_reset_query(); ?>

				   	</div>
			    </div>
		    </section>

		</main>
	</div> <!-- end #content -->

<?php get_footer(); ?>