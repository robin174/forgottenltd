<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>
			
	<div class="content">
		<main class="main">

			<section class="area--bg-white">
				<div class="grid-container">
		            <div class="grid-x grid-margin-x small-up-1 medium-up-2 large-up-2">
		
				    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				    	<?php get_template_part( 'parts/loop', 'single' ); ?>
				    <?php endwhile; else : ?>
				   		<?php get_template_part( 'parts/content', 'missing' ); ?>
				    <?php endif; ?>

				   	</div>
			    </div>
		    </section>

		</main>
	</div> <!-- end #content -->
<?php get_footer(); ?>