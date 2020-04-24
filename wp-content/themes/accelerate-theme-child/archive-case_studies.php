<?php
/**
 * The template for displaying the archive of case studies
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); 
				$services = get_field('services');
				$link = get_field('site_link');
				$image_1 = get_field('image_1');
				$size = 'full' ?>


			<article class="archive-main">
				<aside class="archive-main-info">
					<h2><?php the_title(); ?></h2>
					<h5 class="archive-services"><?php echo $services; ?></h5>			
					<?php the_excerpt(); ?>
					
					<p><a href="<?php echo $link; ?>" class="view-project-link">View Project</a></p>
				</aside>

				<div class="archive-images">
					<?php echo wp_get_attachment_image($image_1, $size); ?>
				</div>
			</article>	
			<?php endwhile; // end of the loop. ?>
		</div>

	</div><!-- #primary -->

<?php get_footer(); ?>
