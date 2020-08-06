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
define( 'DB_NAME', 'testing_1' );

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
define( 'AUTH_KEY',         'Fra<ki/<(0dH6*[:uj:qQ7J0@MLGEQVK&7kZLVT2AMe:{V]z4YJnJ-P$xy<cy~Z0' );
define( 'SECURE_AUTH_KEY',  ')8]J]q/6nzW9W[*ct{NbK64M{cI6`LeBeG~z8P=p{sIF=;h{SJ2=[^4<cYD4]R-R' );
define( 'LOGGED_IN_KEY',    'qhxy|Z/;><#<|6M|5>}6eGOJ_)Lw^#)+b@FqF93&p}o;7x||)yb^}s0a>;iRX6d?' );
define( 'NONCE_KEY',        '+=6q}(a?`xka@;(kq2XaFdu03_9h-v%!HXB@?K2WSFT /~kM 5Nk^pb 5>vhG^Kg' );
define( 'AUTH_SALT',        'u;i>c=!x2!<M$_=5mKeanM74b-h9ApC{s_s}a]:pWL1L#O!n%X,}@.cEq)@)cWm-' );
define( 'SECURE_AUTH_SALT', '(};-Aye:l-H==_mYE&EO12NyDqrjVG$54H+)_6ruyH;Zf?Jo4)lb!dDn8t|l,^iD' );
define( 'LOGGED_IN_SALT',   '{7CIMIjrunQi<W7#O6,o]V<_zbT-V3aUBbub0/f!(,a},O2mbT7#reBl7Lf*4F9P' );
define( 'NONCE_SALT',       'j}zS3p^NSTEGqj&MMklG.BF:I%p5(|J4:DZF4>%~[UdH4[daGPn%4>d]<de60v6R' );

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
