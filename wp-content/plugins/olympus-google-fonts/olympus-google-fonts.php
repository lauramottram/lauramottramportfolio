<?php
/**
 * Google Fonts for WordPress
 *
 * Plugin Name: Google Fonts for WordPress
 * Plugin URI:  https://wordpress.org/plugins/olympus-google-fonts/
 * Description: The easiest to use Google Fonts plugin. No coding required. 870+ font choices.
 * Version:     1.7.6
 * Author:      Fonts Plugin
 * Author URI:  https://fontsplugin.com/?utm_source=wporg&utm_campaign=heading
 * Text Domain: olympus-google-fonts
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /languages
 *
 * @package   olympus-google-fonts
 * @copyright Copyright (c) 2019, Fonts Plugin
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

define( 'OGF_VERSION', '1.7.6' );
define( 'OGF_DIR_PATH', plugin_dir_path( __FILE__ ) );
define( 'OGF_DIR_URL', plugin_dir_url( __FILE__ ) );

require OGF_DIR_PATH . 'class-olympus-google-fonts.php';
require OGF_DIR_PATH . 'blocks/init.php';

$gfwp = new Olympus_Google_Fonts();
