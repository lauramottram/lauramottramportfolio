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
          <img src="https://lauramottram.com/wp-content/uploads/2016/05/under_construction.svg" width="350px">
          <p>Oops, I can't find the page you were looking for.</p>
          <p>Sorry about that. Maybe <a href="https://lauramottram.com/">check out this page instead</a>.</p>
      </div>
    </div>

<?php get_footer(); ?>
