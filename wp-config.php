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
define('DB_NAME', 'composerwp');

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
define('AUTH_KEY',         'syA0TZ&[(%X8,0f`f#u4hol@$baoLD7YoM!Qmo]jJuf$uoR6WgL6`:a;{LBi5;t%');
define('SECURE_AUTH_KEY',  'IUfQQuEwkZ]|Q|,/D#8<oOos;5!fZwYKZ7P9WFrhmWYzx/{/SBWq/]<%>F%g_rSs');
define('LOGGED_IN_KEY',    'ys[stYn9|AYtF{C[ms7L9*^ry0KH>:Ve.`^GdKx@RK%,>2FvJ>[g3,jS=Z<;JDQu');
define('NONCE_KEY',        '9B4a58X/hcrPvUiLe.D8B$9gz]0qou-8#Qj5#^#?n.w8DB].2`MH40mU(Z[CroFO');
define('AUTH_SALT',        'hwWOX A4lG=~1!< {6zjE`(@Q[xLLu{2zBh&b>_Ma2{bn*J)L$OK{G,bEijUy5]s');
define('SECURE_AUTH_SALT', 'g2cj2(NE$J*%K?1sbHo*?k/v_@v!}.nCghoVaX>ISQi1R9,~IAjQrsv*)0#9{_-S');
define('LOGGED_IN_SALT',   'Y@GbMBAcxKouJV[^Dt{c?]P9Y#T/k8q71aw1@LEOPy}Q;aACJvW:.H$eAOjsU+(;');
define('NONCE_SALT',       'QXG?7yWK6<+kXQD5IwDc_w-}WYv|huLgQ H2+9b{xgCR^O~-v)>l6zj~+a1DpQ~o');

define('FS_METHOD','direct');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

