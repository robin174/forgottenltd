<?php
/**
 * The template for displaying 404 (page not found) pages.
 *
 * For more info: https://codex.wordpress.org/Creating_an_Error_404_Page
 */

get_header(); ?>
			
	<div class="content">
		<main class="main">

			<section class="area--bg-white">
	            <div class="grid-container">
	                <div class="grid-x grid-padding-x">
	                	<div class="small-12 large-12 medium-12 cell">

							<article class="content-not-found">
								<header class="article-header">
									<h1><?php _e( 'Epic 404 - Article Not Found', 'jointswp' ); ?></h1>
								</header> <!-- end article header -->
								<section class="entry-content">
									<p><?php _e( 'The article you were looking for was not found, but maybe try looking again!', 'jointswp' ); ?></p>
								</section> <!-- end article section -->
								<section class="search">
								    <p><?php get_search_form(); ?></p>
								</section> <!-- end search section -->
							</article> <!-- end article -->

							<!-- Include how to get involved - or point them to the page -->
							<!-- Also include a link to the resources -->

						</div>
		            </div><!-- end .row -->
		        </div>
		    </section>

		</main>
	</div> <!-- end #content -->

<?php get_footer(); ?>