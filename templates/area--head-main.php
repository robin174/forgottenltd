<!-- Full width block -->
<section class="area--head-main">
	<div class="grid-container">
		<div class="grid-x">
			<div class="cell small-12 medium-12 large-12">

				<h1><?php the_title(); ?></h1>
				<?php if( get_field('subheading') ): ?>
					<h5><?php the_field('subheading');?></h5>
				<?php endif; ?>

			</div><!-- end .cell -->
		</div><!-- end .grid-x -->
	</div>
</section>