<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
 define('AUTH_KEY',         'iqt$|p/KQQg.,+Yz(cy&g4I[VbEA^cXBf^MFo*@crU SFO.>x|wQ~jO:1uOh_N}X');
 define('SECURE_AUTH_KEY',  'f<RRVB%Y&RTp{fnMgn|jmZMm%HX}f:DnG?O^s(?O|6mN-hVl(A>hL-,UbvN[Ga|&');
 define('LOGGED_IN_KEY',    'p20I8eiBs]/6SM.O:b%8<(BCD-+k|j+-1PkQH(j$-L5=<Dge3|=@BnUo8]C~>gYr');
 define('NONCE_KEY',        'V-XU[|?Qe_R])bBdR+4@Fj-~]O2o]9&r%~|*agXb!-YF3F<O6=; ~&v(SrI=T7KE');
 define('AUTH_SALT',        'kfhe7uk@2/Y_MzF9|uLx;vP`x#XE<@P<RGmbOpI[q46)9Nymo{+B}$tXWG7(/AbN');
 define('SECURE_AUTH_SALT', '[dnNoSEQ/1VXr@jpQh5Y|PR3t,KPI-8CrOp?jyyo%[6BtQ}CUD`H/&3D<BSm8{BX');
 define('LOGGED_IN_SALT',   '?BV?J-[.aY,-BM!RjC]Zaq?tt-n+6)J1o+21!d@<Ap[IWH-)nXWT*hSHjw%~U|Hy');
 define('NONCE_SALT',       '.{-x|$kM_;N[/0ahqgT+OD3P.Rqq`}-#<^-(c?pRk2jmd0rg84&kM5xeh,_W?X[e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */

 define( 'DISALLOW_FILE_EDIT', true );
define('WP_ALLOW_REPAIR', true);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
