<?php
/**
 * The template for displaying 404 pages
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

 	<!-- .main-content -->

    <div id="primary" class="site-content">
      <div class="main-content lost-page" role="main">
          <h2>You look a little lost</h2>
          <iframe src="https://giphy.com/embed/l4FGl5F6QioSpGbXa" width="480" height="360" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
          <p>Oops, I can't find that page you were looking for.
          <br>Sorry about that. Maybe <a href="http://localhost:8888/wordpress/home/">check out this page instead</a>. I bet you'll find it useful.</p>
      </div>
    </div>

<?php get_footer(); ?>
