<?php
/*
Template Name: Page - Template
*/
get_header(); ?>
	
	<?php get_template_part('templates/area--head-main'); ?>

	<div class="content">
		<main class="main">

			<section class="area--bg-white">
	            <div class="grid-container grid-x">
	                <div class="small-12 large-10 medium-10 cell">
			    		<?php get_template_part('templates/template--buildingblocks'); ?>
			    		 <section>
						    <?php if(is_page('privacy-policy')): { ?>
						        <p style="font-size:90%;">
						            ---<br>
						            <i>Page last updated: <?php the_modified_date(); ?></i><p>
						    <?php } endif; ?>
					    </section>
			    	</div>
		        </div>
		    </section>

		</main>
	</div> <!-- end #content -->

<?php get_footer(); ?>