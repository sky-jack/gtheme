				<div id="sidebar-home" class="sidebar fourcol last clearfix" role="complementary">

					<?php if ( is_active_sidebar( 'sidebar-home' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar-home' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert help">
							<p><?php _e("Please activate some Widgets.", "bonestheme");  ?></p>
						</div>

					<?php endif; ?>

				</div>