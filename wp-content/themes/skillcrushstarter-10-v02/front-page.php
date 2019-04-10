<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content">
		<div class="content">
			<div class="desktop-content"><?php while ( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
			<div class="mobile-content">
				<h1><?php the_title(); ?></h1>
				<p>I am a <strong>freelance web designer and WordPress front-end developer </strong>with over 15 years experience working with <strong>not-for-profit</strong> organizations.</strong>.</p>
				<p>In a previous life, I worked in <strong>international development</strong> in Kenya, bungee jumped off Victoria Falls, <strong>cycled 15,000 miles around South America</strong>, and published a <strong>book about cycle touring</strong>.</p>
			</div>
				<a href="<?php echo site_url('/home/'); ?>" class="btn">Work With Me</a>
				<?php endwhile; ?>
		</div>
	</div>

</section>
<!-- <div class="mobile-menu">
	<h1>Discover my work</h1>
	<ul>
		<li>About Me</li>
		<li>Services</li>
		<li>My Work</li>
	</ul>
</div> -->
