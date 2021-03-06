<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package hospitality
 */

get_header(); ?>
	<section class="masthead">
	<?php if( is_home() && get_option('page_for_posts') ) : ?>
		<h3 class="entry-title"><?php echo apply_filters('the_title',get_page( get_option('page_for_posts') )->post_title); ?></h3>
	<?php endif; ?>
	<?php if(is_home()) { ?>
	    <?php
	        $page_for_posts = get_option( 'page_for_posts' );
	        echo get_the_post_thumbnail($page_for_posts, 'full');
	    ?>
	<?php } ?>
	</section>

	<div class="flexbox container">
		
		<div id="primary" class="content-area">

			<!-- <p>This is index.php</p> -->

			<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );
					?>

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_template_part( 'template-parts/sidebar', 'news' ); ?>

	</div>

	


<?php get_footer(); ?>
