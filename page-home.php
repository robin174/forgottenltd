<?php
/*
Template Name: Page - Home
*/
get_header(); ?>
	
	<div class="content">
		<main class="main">

			<!-- Full width: Orange background -->
	        <section class="area--bg-orange">
	            <div class="grid-container">
	                <div class="grid-x grid-padding-x">
	                	<div class="large-offset-1 small-12 large-10 medium-12 cell text-center">
	                	 	<h1 class="logo--hero"><?php the_field('home_main_title'); ?></h1>

	                	 	<!-- Calling for fairness and equality for small limited companies -->
							<!-- In caps as per FB page: https://www.facebook.com/groups/LtdCompanyDirectors/?fref=nf -->
	                        <p class="home--hero font--bold"><?php the_field('home_main_intro'); ?></p>
	                        <?php if( get_field('add_button') ): ?>
	                        	<a class="button button--cta-bk" href="<?php the_field('home_m_but_link'); ?>" target="_blank"><i class="fas fa-pen-nib fa-2x" style="vertical-align: middle;"></i>&nbsp;&nbsp;<?php the_field('home_m_but_cta'); ?></a>
	                    	<?php endif; ?>

	                    	<!-- https://petition.parliament.uk/petitions.json -->
	                        <p class="spacing--top-sm font--bold font--increase-lg color--bk signatures"><span class="signatures"></span><span style="border-bottom:5px solid black;margin-bottom:5px;">We need more.</span></p>
	                        <script>
	                        	var petitionURL = "https://petition.parliament.uk/petitions/310515.json";
	                        	$.getJSON(petitionURL, function(data) {
	                        		var pNo = data.data.attributes.signature_count;
	                        		$("span.signatures").html("We currently have " + pNo + " signatures. " );
	                        	});
	                        </script>
	                        
	                    </div>
	                </div><!-- end .row -->
	            </div>
	        </section>

	        <!-- Full width: White background -->
			<section class="area--bg-white">
	            <div class="grid-container">
	                <div class="grid-x grid-padding-x">
	                	<div class="small-12 large-6 medium-6 cell small-order-2 medium-order-1">
	                        <h4 class="home--hero"><?php the_field('home_s_intro'); ?></h4>
	                        <p><?php the_field('home_s_content'); ?></p>
	                        <p><strong><?php the_field('home_s_content_cta'); ?></strong></p>
	                        <?php if( get_field('add_mani_button') ): ?>
	                        <a class="button button--cta-or" href="<?php the_field('home_man_but_link'); ?>" target="_blank"><i class="fas fa-file-pdf fa-2x" style="vertical-align: middle;"></i>&nbsp;&nbsp;<?php the_field('home_man_but_cta'); ?></a>
	                        <?php endif; ?>
	                    </div>
	                    <div class="small-12 large-6 medium-6 cell small-order-1 medium-order-2">
	                    	<iframe src="https://player.vimeo.com/video/<?php the_field('home_vimeo_id'); ?>" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
	                    	<p class="video--inpage-credit"><i class="fas fa-copyright"></i>&nbsp;<?php the_field('home_vimeo_credit'); ?></p>
	                    </div> 
	                </div><!-- end .row -->
	            </div>
	        </section>

	        <!-- Full width: Black background -->
			<section class="area--bg-black">
	            <div class="grid-container">
	                <div class="grid-x grid-padding-x text-center">
	                	<div class="small-12 large-12 medium-12 cell">
	                		<h2>What can I do?</h2>
	                		<p class="home--intro">We are campaigning for fair and equal government support for small limited companies:</p>
	                		<div class="grid-container section-">
	                			<div class="grid-x grid-padding-x">
	                				<div class="small-12 large-4 medium-4 cell">
				                        <h2><i class="fas fa-file-signature color--or"></i></h2>
				                        <h3>Sign</h3>
				                        <p>Our petition is calling for support for small limited company directors.</p>
				                        <p><a href="https://petition.parliament.uk/petitions/310515"><i class="fas fa-external-link"></i>&nbsp;&nbsp;Petition 310515</a></p>
				                    </div>
				                    <div class="small-12 large-4 medium-4 cell">
				                    	<h2><i class="fas fa-share-alt color--or"></i></h2>
				                    	<h3>Share</h3>
				                        <p>Help us spread the word, raise awareness and increase visibility of our cause.</p>
				                        <p><a href="/what-can-i-do"><i class="fas fa-megaphone"></i></i></i>&nbsp;&nbsp;Spread the word</a></p>
				                    </div>
				                    <div class="small-12 large-4 medium-4 cell">
				                    	<h2><i class="fas fa-envelope-open-text color--or"></i></h2>
				                    	<h3>Write</h3>
				                        <p>Help raise awareness of our cause with your local MP.</p>
				                        <p><a href="/what-can-i-do"><i class="fas fa-long-arrow-right"></i></i>&nbsp;&nbsp;Find out how</a></p>
				                    </div>
	                			</div>
	                		</div>
	                	</div>
	                </div><!-- end .row -->
	            </div>
	        </section>

			<!-- Full width: Orange Light background -->
	        <section class="area--bg-orange-light">

	            <div class="grid-container">
	                <div class="grid-x grid-padding-x">
	                    <div class="small-12 large-6 medium-6 cell">
	                	 	<blockquote class="speech--quote-or">&ldquo;The Government should focus on making sure that those self-employed who work through their own companies can have dividends that result from self-employment being counted when it comes to the assessment of the furlough amount that they can qualify for.&rdquo;
	                	 		<cite><span class="cite--person">Mel Stride MP</span><br>Treasury Select Committee Chair </cite>
	                	 	</blockquote>
	                    </div>
	                    <div class="small-12 large-6 medium-6 cell">
	                	 	<blockquote class="speech--quote-or">&ldquo;If [the Treasury] wants a bounceback post-shutdown, every company that was viable pre-shutdown should be helped. Help is not the same as 'go and get a loan', even if it is interest free at first, because the 'helper' is requiring you to take a unquantifiable risk with your future.&rdquo;
	                	 		<cite><span class="cite--person">Andy Verity</span><br>BBC Economics Correspondent</cite>
	                	 	</blockquote>
	                    </div>
	                </div><!-- end .row -->
	            </div>
	        </section>

    	</main>
	</div> <!-- end #content -->

<?php get_footer(); ?>