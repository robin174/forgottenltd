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

	                	 	<!-- Calling for fairness and equality
							for small limited companies -->
							<!-- In caps as per FB page: https://www.facebook.com/groups/LtdCompanyDirectors/?fref=nf -->

	                        <p class="home--hero font--bold">Welcome to The <strong>#ForgottenLtd</strong> Campaign for small limited company directors affected by the coronavirus pandemic in the UK. <strong>We need your help.</strong></p>
	                        <a class="button button--cta-bk" href="https://petition.parliament.uk/petitions/310515" target="_blank"><i class="fas fa-pen-nib fa-2x" style="vertical-align: middle;"></i>&nbsp;&nbsp;Sign the petition</a>

	                        <p class="spacing--top-sm font--bold font--increase-lg color--bk signatures"><span class="signatures"></span><span style="border-bottom:5px solid black;margin-bottom:5px;">We need more.</span></p>
	                        <!-- https://petition.parliament.uk/petitions.json -->
	                        <script>
	                        	var petitionURL = "https://petition.parliament.uk/petitions/310515.json";
	                        	$.getJSON(petitionURL, function(data) {
	                        		console.log(data);

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
	                        <h4 class="home--hero">We are small businesses.<h4>
							<h4 class="home--hero">We do not qualify for any meaningful government support.</h4>
	                        <p>The <strong>#ForgottenLtd</strong> Campaign exists to raise awareness of the lack of meaningful government support for the small business community across the UK. We call on the government to address this disparity by extending COVID-19 support packages to those of us left behind.</p>
	                        <p><strong>We are asking for parity. We are asking not to be forgotten.</strong></p>
	                        <a class="button button--cta-or" href="https://forgottenltd.com/wp-content/uploads/2020/05/ForgottenLtd-Manifesto-06May.pdf" target="_blank"><i class="fas fa-file-pdf fa-2x" style="vertical-align: middle;"></i>&nbsp;&nbsp;View our manifesto</a>
	                        
	                    </div>
	                    <div class="small-12 large-6 medium-6 cell small-order-1 medium-order-2">
	                    	<iframe src="https://player.vimeo.com/video/414013285" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
	                    	<p class="video--inpage-credit"><i class="fas fa-copyright"></i>&nbsp;Lee Climpson from <a href="https://www.wearetransmission.com/" target="_blank" title="Transmission Productions">Transmission Productions</a></p>
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
	                		<?php /*
	                		<div class="grid-container">
	                			<div class="grid-x grid-padding-x">
	                				<div class="small-12 large-12 medium-12 cell">
	                					<p class="color--or">For full details, signiclick here.</p>
	                				</div>
	                			</div>
	                		</div>
	                		*/ ?>
	                	</div>
	                	
	                </div><!-- end .row -->
	            </div>
	        </section>


			<?php /* NEED TO WORK THROUGH THIS
	        <!-- 
	        	Title, Intro sentence, black box with form field in white and orange button // 
	        	And try orange box with form field in white and black button 
	    	-->
			<section class="area--bg-orange">
	            <div class="grid-container">
	                <div class="grid-x grid-padding-x">
	                	<div class="medium-offset-2 small-12 large-9 medium-9 cell">
	                	 	<h2>Signup</h2>
	                        <p>Morbi sed cursus augue. Aliquam ex lectus, varius ut pretium id, ornare vel lacus.</p>
	                        <form>
								<div class="grid-container fluid">
									<div class="grid-x">
										<div class="medium-8 cell">
											<label>
												<input type="email" placeholder="Email address">
											</label>
										</div>
										<div class="medium-4 cell">
											<button type="submit" class="button button--cta-bk" value="Submit">Submit Issue</button>
										</div>
									</div>
								</div>
							</form>

	                    </div>
	                </div><!-- end .row -->
	            </div>
	        </section>
	        
	        <!-- Full width: Orange background -->
	        <section class="area--bg-orange">
	            <div class="grid-container">
	                <div class="grid-x grid-padding-x">
	                	<div class="large-offset-2 small-12 large-8 medium-8 cell">
	                	 	<h2>Signup</h2>
	                        <p>Morbi sed cursus augue. Aliquam ex lectus, varius ut pretium id, ornare vel lacus.</p>
	                    </div>
	                </div><!-- end .row -->
	            </div>
	        </section>
	        */ ?>

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