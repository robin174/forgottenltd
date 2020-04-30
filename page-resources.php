<?php
/*
Template Name: Page - Resources
*/
get_header(); ?>
	
	<?php get_template_part('templates/area--head-main'); ?>

	<div class="content">
		<main class="main">

			<section class="area--bg-white">
	            <div class="grid-container grid-x">
	                <div class="small-12 large-12 medium-12 cell">
			    		<?php get_template_part('templates/template--resources'); ?>
			    	</div>
		        </div>
		    </section>

		</main>
	</div> <!-- end #content -->

	<?php get_template_part('templates/area--foot-main'); ?>

<?php get_footer(); ?>