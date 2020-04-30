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
			    	</div>
		        </div>
		    </section>

		</main>
	</div> <!-- end #content -->

	<?php get_template_part('templates/area--foot-main'); ?>

<?php get_footer(); ?>