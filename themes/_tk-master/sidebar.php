<?php
/**
 * The sidebar containing the main widget area
 *
 * @package _tk
 */
?>

	</div><!-- close .main-content-inner -->

	<div class="sidebar col-sm-12 col-md-4">

		<?php // add the class "panel" below here to wrap the sidebar in Bootstrap style ;) ?>
		<div class="sidebar-padder d-flex flex-column flex-shrink-0 p-3">

			<?php do_action( 'before_sidebar' ); ?>
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

				<aside id="search" class="widget widget_search">
					<?php get_search_form(); ?>
				</aside>

				<aside id="archives" class="widget widget_archive">
					<div class="card mb-2 mx-auto"  style="background-color: rgb(255, 193, 7, 0.9); width: 20rem;">
						<div class="card-header text-center">
							<h3 class="widget-title"><?php _e( 'Archives', '_tk' ); ?></h3>
						</div>
					</div>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget widget_meta">
					<div class="card mb-2 mx-auto"  style="background-color: rgb(255, 193, 7, 0.9); width: 20rem;">
						<div class="card-header text-center">
							<h3 class="widget-title"><?php _e( 'Meta', '_tk' ); ?></h3>
						</div>
					</div>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; ?>

		</div><!-- close .sidebar-padder -->
