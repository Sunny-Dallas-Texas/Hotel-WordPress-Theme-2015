<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package hospitality
 */

get_header(); ?>

	<section class="masthead">
	  <?php if ( have_posts() ) : ?>

	    <?php while ( have_posts() ) : the_post(); ?>

	        <h3><?php the_title(); ?></h3>
	        <?php the_post_thumbnail('full'); ?>

	    <?php endwhile; ?>

	  <?php endif; ?>
	</section>
<!-- create a separate div instead of using the other WordPress parent to avoid crazy conflicts -->
<div class="flexbox about clearfix container">
	
	<div id="primary" class="content-area">
		<!-- <p>This is the page.php</p> -->

		

		<main id="main" class="site-main" role="main">


			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>
			
			<!-- ====================================
			ABOUT VIDEO/IMAGES 
			==================================== -->
			
			<?php get_template_part( 'template-parts/content', 'about' ); ?>

			<!-- ====================================== -->

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_template_part( 'template-parts/sidebar', 'about' ); ?>

</div>


<?php get_footer(); ?>