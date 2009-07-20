	<div id="primary" class="sidebar">

		<ul class="xoxo">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : // begin primary sidebar widgets ?>

<?php endif; // end primary sidebar widgets  ?>
			<li id="attend-links">
				<h3><?php _e( 'Register and Submit', 'sandbox' ) ?></h3>
				<ul>
				<li class="page_item page-item"><a href="<?php bloginfo('url') ?>/register/" title="Register">Register to attend</a></li>
				<li class="page_item page-item-2"><a href="<?php bloginfo('url') ?>/submit/" title="Proposal List">Proposal list</a></li>
				</ul>
			</li>


			<li id="social-links">
				<h3><?php _e( 'Stay Connected', 'sandbox' ) ?></h3>
				<ul>
					<li><a href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" rel="alternate" type="application/rss+xml"><?php _e( 'Blog Feed', 'sandbox' ) ?></a></li>
					<li><a href="https://twitter.com/linuxplumbers">Twitter</a></li>
					<li><a href="https://identi.ca/linuxplumbers">identi.ca</a></li>
					<li><a href="http://lists.osuosl.org/mailman/listinfo/announce">Announce list</a></li>
					<li><a href="http://planet.linuxplumbersconf.org/">Planet LPC</a></li>
				</ul>
			</li>

			<li>
				<h3><?php _e( 'Sponsors', 'sandbox' ) ?></h3>
				<ul class="sponsor-links">
					<li><a href="http://intel.com"><img src="/2009/style/intel_logo.png" /></a></li>
					<li><a href="http://ibm.com"><img src="/2009/style/IBMtm.png" /></a></li>
					<li><a href="http://hp.com"><img src="/2009/style/hp_logo.gif" /></a></li>
					<li><a href="http://google.com"><img src="/2009/style/google_logo.gif" /></a></li>
					<li><a href="http://novell.com"><img src="/2009/style/novelllogo.png" /></a></li>
					<li><a href="http://canonical.com"><img src="/2009/style/canonical.png" /></a></li>
					<li><a href="http://www.windriver.com/"><img src="/2009/style/windriver-logo.png" /></a></li>
				</ul>
				<h3><?php _e( 'Media Sponsors', 'sandbox' ) ?></h3>
				<ul class="sponsor-links">

					<li><a href="http://lwn.net"><img src="/2009/style/lwnlogo.png" /></a></li>
					<li><a href="http://linuxjournel.com"><img src="/2009/style/ljcolor.png" /></a></li>
					<li><a href="http://www.linuxpromagazine.com/"><img src="/2009/style/LinuxPro-logo.png" /></a></li>
				</ul>
			</li>


		</ul>
	</div><!-- #primary .sidebar -->

	<div id="secondary" class="sidebar">
		<ul class="xoxo">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : // begin secondary sidebar widgets ?>
			<li id="search">
				<h3><label for="s"><?php _e( 'Search', 'sandbox' ) ?></label></h3>
				<form id="searchform" class="blog-search" method="get" action="<?php bloginfo('home') ?>">
					<div>
						<input id="s" name="s" type="text" class="text" value="<?php the_search_query() ?>" size="10" tabindex="1" />
						<input type="submit" class="button" value="<?php _e( 'Find', 'sandbox' ) ?>" tabindex="2" />
					</div>
				</form>
			</li>

<?php wp_list_bookmarks('title_before=<h3>&title_after=</h3>&show_images=1') ?>


			<li id="meta">
				<h3><?php _e( 'Meta', 'sandbox' ) ?></h3>
				<ul>
					<?php wp_register() ?>

					<li><?php wp_loginout() ?></li>
					<?php wp_meta() ?>

				</ul>
			</li>
<?php endif; // end secondary sidebar widgets  ?>
		</ul>
	</div><!-- #secondary .sidebar -->
