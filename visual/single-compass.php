<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Visual
 * @since Visual 0.1
 */

get_header(); ?>

		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">
			<a href="http://wp.me/P2ID5z-djg"><h1 class="fontheader">Boston Counter Cultural Compass</h1></a>

			<?php while ( have_posts() ) : the_post(); ?>
			
				<?php get_template_part( 'content', 'single' ); ?>

				<?php visual_content_nav( 'nav-below' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>

			<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_sidebar('permalink'); ?>
<?php get_footer(); ?>