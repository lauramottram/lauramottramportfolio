<?php
/**
 * The template for displaying archive of case studies.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div class="page-intro">
	<h2>My Work</h2>
	<h4>Take a look at some of my previous work, and get inspired 💡. </h4>
</div>


<section id="primary" class="site-content">
	<div class="main-content" role="main">
		<?php while ( have_posts() ) : the_post();
			$image_1 = get_field("image_1");
			$size = "full";
			$services = get_field('services');
		?>

	<article class="case-study">
		<aside class="case-study-sidebar">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h2>
			<h4><?php echo $services; ?></h4>
			<p><?php the_excerpt(); ?></p>
			<p class="read-more-link"><a href="<?php the_permalink(); ?>">View Project ></a></p>
		</aside>
		<div class="case-study-images">
			<?php if($image_1){
			echo wp_get_attachment_image( $image_1, $size );
			}?>
		</div>
	</article>
			<?php endwhile; // end of the loop. ?>
		</div>
	</section>
		<!-- .main-content -->

	<!-- #primary -->
<?php get_footer(); ?>
