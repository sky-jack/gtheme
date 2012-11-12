			<footer class="footer" role="contentinfo">
			
				<div id="inner-footer" class="wrap clearfix">
					<div class="sharing-module">
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
	                		
					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->