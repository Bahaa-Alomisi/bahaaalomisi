<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bahaa' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'g2xuVa<Pq.@!s#gs)9E{2?JZ R7WhOEnn@H>%MuF^ONV]o>oG#nUjh=.9|t+MI~T' );
define( 'SECURE_AUTH_KEY',  'Vx>OQ;{&*h-EP)CM,=uFXDoC9?8}CQYW`Cz]xoKh]r4#5Nqm;ieRSYa<>17PZZuV' );
define( 'LOGGED_IN_KEY',    '!]Vhy=Lff|.e.bLj_hoo}t?yQU4V8I<85}/CA#P/].QGG-5RSempO+UM8M#h}ZKn' );
define( 'NONCE_KEY',        'u-7Y%,K/rQ..NM4BaC!&%)oV*~XK@9m$NXheCzWLe{kpuJU>>lwAI$uK0c;Uyb3o' );
define( 'AUTH_SALT',        '|X.-1Qx-G|(4/qU[UFvX&:_kFb4AhyT?oq!F^J&;Xt-x-MrB#PpaSM& gr#Zf/mq' );
define( 'SECURE_AUTH_SALT', ',J[wxSI1qvlGzXsj7fa_kcboTzTV rvTa`8ZHI}3uV,_;DLlYBG5L5FyRyivsjwr' );
define( 'LOGGED_IN_SALT',   ')}KH+FY}b_T<,*h5L:x/_LHYV#O|qLX2dGvWmlS,I_?nsCT}we nPvz7CvJOwA<)' );
define( 'NONCE_SALT',       '6D1DX8K]r;8fh}:b=9{bq2LNziJ ]pW<S;;O{uo.Se=2l,bw~P` ]O4ib^ovy[OC' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
