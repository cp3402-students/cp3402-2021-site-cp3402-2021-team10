<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _tk
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="card text-center border-start border-warning mb-2"style="background-color: rgb(255, 193, 7, 0.9);">
		<div class="card-header">
			<header>
				<h1 class="page-title mb-2"><?php the_title(); ?></h1>
			</header><!-- .entry-header -->
		</div>
	</div>
	<div class="entry-content">
		<div class="entry-content-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="card">
			<div class="card-body border-start border-5 border-warning bg-light">
				<?php the_content(); ?>
			</div>
		</div>
		
		<?php _tk_link_pages(); ?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', '_tk' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
