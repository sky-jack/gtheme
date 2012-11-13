			<footer class="footer" role="contentinfo">
			
				<div id="inner-footer" class="wrap clearfix">
					<div class="sharing-module">
						<h5> Share With Genuine </h5>
						<ul class="sharing-links">
							<li class="sharing twitter"> <a href="">Twitter</a></li>
							<li class="sharing facebook"> <a href="">Facebook</a></li>
							<li class="sharing youtube"> <a href="">Youtube</a></li>
							<li class="sharing vimeo"> <a href="">Vimeo</a></li>
							<li class="sharing instagram"> <a href="">Instagram</a></li>
							<li class="sharing rss"> <a href="">RSS</a></li>
							<li class="sharing soundcloud"> <a href="">Soundcloud</a></li>
						</ul>	
					</div>
					
					<nav role="navigation">
    					<?php bones_footer_links(); ?>
	                </nav>

	                <div class="mail-sign-up">
	                	<h5> Sign Up To Recieve Newsletter </h5>

						<form id="mailform" class="mail-form " name="signup" action="http://gwilymgold.com/pommo/user/process.php" method="post">
							<label for="Email">mail form</label>
							<span>
								<input class="short_button" type="image" value="Subscribe" alt="subscribe" >
							</span>

							<span>
								<input class="short_submit" type="text" maxlength="80" value="enter your email" name="Email">
							</span>
								
							<input type="hidden" value="true" name="pommo_signup">
						</form>

						<h5 class="footer-logo">
							Genuine Music Concierge
						</h5>	
	                </div>

		
					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->