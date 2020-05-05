<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>
			
	<div class="content">
		<main class="main">

			<section class="area--bg-white">
				<div class="grid-container">
		            <div class="grid-x grid-margin-x small-up-1 medium-up-3 large-up-3">
		
					    <?php get_template_part('templates/block--resource'); ?>

				   	</div>
			    </div>
		    </section>

		</main>
	</div> <!-- end #content -->

<?php get_footer(); ?>