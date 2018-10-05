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
define('AUTH_KEY',         '.YXN^zygYyY7{i:~UA:GJ1z/w>|K=-rx<tx(`neJ$l.*K%I,FP+ dbQWz8~>Vm4%');
define('SECURE_AUTH_KEY',  'q3TKC{Um?-G`i&qxb^+ BHqp2r~u73liGmQQZEsXbZfK11KA_DKbz8#vq<>+9_py');
define('LOGGED_IN_KEY',    'Y<fO6$f!3UNkyo<xUz!vOfX)NKR2xcy&6k.{*DI|iVzRU>a:lYxHe:6xwFx(KkXH');
define('NONCE_KEY',        'RRV>-=z2rq$S&8bVKOoqUX[3MIXf +`zQ~,ZHjXncK4C8f]`Fh1y<F &bP(AHI<0');
define('AUTH_SALT',        '>]2,CUCk ZI@>+619*^vhUo}AwOxr]DkohnN$U14+pz&<!FM=BU<}t<s}oh)[-)9');
define('SECURE_AUTH_SALT', 'Gj}crHA}+8D/=^2p -ZFk,hU( wMu60U`R&H%B<6z kCddM%Xms1i/sNcz@|OqyJ');
define('LOGGED_IN_SALT',   '4x`{pUYBVCvRO/dU5S2OiedCCeL. nqK$(K6WPGcSEM)sr<3>?MyEh!q9Wnz6 |-');
define('NONCE_SALT',       '|GU.DgQU+/XF5,.^b*@P`}P&7=Y%bw(`*?n:e#T}b$[#9]cjG3Ml8eC>/*wW5PI3');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
