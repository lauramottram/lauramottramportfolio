<?php
/*
Template Name: Minimal Landing Page
*/

get_header(); ?>

<!-- header image -->

	<div class="landing-image">
		<img src="http://lauramottram.com/wp-content/uploads/2018/10/shutterstock_324633638-1.jpg">
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
				<img src="https://lauramottram.com/wp-content/uploads/2018/05/IMG_2363-copy.jpg">
			</div>
			<p>I am a <strong>freelance web designer and WordPress front-end developer </strong>with over 15 years experience working with <strong>not-for-profit</strong> organizations, including the British Red Cross Society, Tourettes Action and Leonard Cheshire Disability Kenya.</p>
			<p>My experience as a successful fundraiser and communicator means <strong>I understand what your organization needs</strong>. I build in Wordpress as it offers easy-to-maintain sites, and a wealth of options for fundraising and communicating with supporters.</p>
			<p>I also love building websites for adventures - just like the one I made for my <strong>15,000 mile trip around South America by bike</strong>. If you are planning your own trip or have a passion you want to share, I would love to work with you on it.</p>
			<div class="about-me-button">
				<button class=about-me-button-style type="button"><a href="https://lauramottram.com/about/">More about me</a></button>
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
			<button class=services-button-style type="button"><a href="https://lauramottram.com/services/">Find out more</a></button>
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
