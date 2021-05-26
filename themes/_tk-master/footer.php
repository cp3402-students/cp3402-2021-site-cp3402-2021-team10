<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 * 
 */

global $wp;
$current_url = home_url(add_query_arg(array(), $wp->request));
 

?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<footer id="colophon" class="bd-footer footer py-3 mt-auto bg-light border-top border-5 border-warning" role="contentinfo">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6">
			<a class="text-decoration-none link-dark translate-middle" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>


			</div>
			<div class="site-footer-inner col-sm-6 text-end">
				<div class="site-info small">
					<?php do_action( '_tk_credits' ); ?>
					<a class="d-inline-flex align-items-center link-dark text-decoration-none" href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', '_tk' ); ?>" rel="generator"><strong><?php printf( __( 'Proudly powered by %s', '_tk' ), 'WordPress' ); ?></strong></a>
					
                    <a class="credits d-inline-flex align-items-center link-dark text-decoration-none" rel="nofollow" href="http://themekraft.com/" target="_blank" title="Themes and Plugins developed by Themekraft" alt="Themes and Plugins developed by Themekraft"><?php _e('Themes and Plugins developed by Themekraft.','_tk') ?> </a>
				</div><!-- close .site-info -->

			</div>
		</div>
	</div><!-- close .container -->
</footer><!-- close #colophon -->


<?php wp_footer(); ?>
</body>
</html>
