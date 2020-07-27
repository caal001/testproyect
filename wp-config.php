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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xz/t#L@(d6a@)-kCVZgyap5(<7Ewla[3mMfsgd/`TmX7a`W>p/Sr|.pM%1V382VX' );
define( 'SECURE_AUTH_KEY',  'F^/lbJU)o^,B)5j28&!L#`=vKd2 Y^_yaiv,`q&m$NC/F#,58=wStLyNn.SJl<a ' );
define( 'LOGGED_IN_KEY',    '@NRxU|g[%0|F1ndW(F:L=@7 [Zu^Ad?@8{4S%q#8f:YtVuUU(;D]?zTOn<J-1MTd' );
define( 'NONCE_KEY',        'U/#_F+]x4wm^mM&pz}ltpJ.JY6gm(6IWq)o:]aH+3<{xRRWf3Pe741nmGprsi_DC' );
define( 'AUTH_SALT',        '0KAob1)CM[l-}0S&a~uful:;(k2F} rs,u-b}VdTtI1N]Meh6@e<{8;qOl?ySFI9' );
define( 'SECURE_AUTH_SALT', '+)<]LCWsA5xs?w_on`zXuB;H)*`JePY<Oe>SH)}J5??6k:~dEG}3H%aMj}YbT;W`' );
define( 'LOGGED_IN_SALT',   '640G?xq5kCC[56*+xDL$5?*[wh|NJrenXE72q{[Z4eW!8r1CA(^T^[qAO;wBzQy~' );
define( 'NONCE_SALT',       'Al?lZX[;HVkx4UY[QogDrgGVl)W9WN 1,PkaiJq:^8OOUF,;ZPHT]du9nhG_0H~i' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
