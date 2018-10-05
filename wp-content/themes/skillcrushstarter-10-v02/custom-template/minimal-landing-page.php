<?php
/*
Template Name: Minimal Landing Page
*/

get_header(); ?>

<!-- header image -->

	<div class="landing-image">
		<img src="http://localhost:8888/wordpress/wp-content/uploads/2018/09/stock-photo-web-design-development-style-ideas-interface-concept-324633638.jpg">
	</div>


<!-- .main-content -->
	<div id="primary" class=" landing-page">
		<section>
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div>
	</section>
	</div>

	<!-- #About Me -->

	<div class="about-me">
		<h2>About Me</h2>
		<div class="about-me-content">
			<div class="headshot">
				<img src="http://localhost:8888/wordpress/wp-content/uploads/2018/05/IMG_2363.jpg">
			</div>
			<p>I have been <strong>designing and developing websites</strong> for not-for-profit organizations for over 15 years, and have worked for organizations including the <strong>Red Cross, Tourettes Action and Leonard Cheshire Disability Kenya</strong>.<p>
			<p>My experience as a <strong>successful fundraiser and communicator</strong> means I understand what your organization needs. I build in Wordpress as it offers easy-to-maintain sites, and a wealth of options for fundraising and communicating with supporters and members.</p>
			<p>I also love building websites for <strong>adventures</strong> - just like the one I made for my <strong>15,000 mile cycle ride around South America</strong> in 2011. If you are planning your own trip or have a passion you want to share with others, I would love to work with you on it.</p>
			<div class="about-me-button">
				<button class=about-me-button-style type="button"><a href="http://localhost:8888/wordpress/about/">More about me</a></button>
			</div>
		</div>
	</div>



	<!-- #Services -->

	<div class="services">
		<h2>I build websites that are...</h2>
		<div class="services-content">
			<div class="services-column1">
				<div class="easy-to-use">
					<i class="fa fa-user fa-3x"  aria-hidden="true"></i>
					<h3>Easy to Use</h3>
					<p>Wordpress is a great platform for creating easy to maintain websites, even for people with no previous experience.</p>
				</div>
				<div class="responsive">
					<i class="fa fa-mobile fa-3x" aria-hidden="true"></i>
					<h3>Responsive</h3>
					<p>Your website will look great on any device - desktop, tablet or phone.</p>
				</div>
				<div class="affordable">
					<i class="fa fa-money fa-3x" aria-hidden="true"></i>
					<h3>Affordable</h3>
					<p>I understand not-for-profit budgets. We will build a great website for a price that works for us all.</p>
				</div>
			</div>
			<div class="services-column2">
				<div class="effective">
					<i class="fa fa-thumbs-o-up fa-3x" aria-hidden="true"></i>
					<h3>Effective</h3>
					<p>We will maximize donations and engage stakeholders by using premium plugins to draw in your audience.</p>
				</div>
				<div class="seo">
					<i class="fa fa-search fa-3x" aria-hidden="true"></i>
					<h3>Visible</h3>
					<p>We will use SEO best practices to draw people to your website.</p>
				</div>
				<div class="secure">
					<i class="fa fa-lock fa-3x" aria-hidden="true"></i>
					<h3>Secure</h3>
					<p>I will ensure your website is safe and secure against spammers and hackers.</p>
				</div>
			</div>
		</div>
		<div class="services-button">
			<button class=services-button-style type="button">Find out more</button>
		</div>
	</div>


	<!-- #primary -->

	<section class="featured-work">
		<div class="site-content">
			<h2>Featured Work</h2>
			<div class="featured-work-content">
				<ul class="homepage-featured-work">
				<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
					<?php while ( have_posts() ) : the_post();
						$image_1 = get_field("image_1");
						$size = "medium";
					?>
					<li>
						<figure>
							<?php echo wp_get_attachment_image($image_1, $size); ?>
						</figure>

						<h3> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h3>
					</li>
					<?php endwhile; ?>
				<?php wp_reset_query(); ?>
				</ul>
			</div>
		</div>
	</section>

<!-- #contact form -->

<section id="let-talk" class="talk">
	<div>
		<h2>Let's Talk</h2>
		<p><strong>Need a new website or want help jazzing up your existing one? I can help!</p>
		<p>Drop me a message and let's talk.</strong></p>
		<div class="contact-form">
			<?php echo do_shortcode( '[contact-form-7 id="47358" title="Contact form 1"]' ); ?>
		</div>
	</div>
</section>

<!-- #footer
<?php get_footer(); ?>
