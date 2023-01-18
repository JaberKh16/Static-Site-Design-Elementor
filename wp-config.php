<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_elementor' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3312' );

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
define( 'AUTH_KEY',         'BUnW ;MOYq/o:@nhdsZ:*qSf&C&U[ticp%Z?-uLasGqFJFRi}6SFD&JwtLEl t$f' );
define( 'SECURE_AUTH_KEY',  'f#l^|]6THlxMgTv.FSHy+G2XoNmc`7[19i x:n,m_us:Jf ix1rZwQ/S9,|NTr/q' );
define( 'LOGGED_IN_KEY',    'ZP7g7tWxiiT0s5UhP_+YIo~`z<<o)atCCn5QVdEb7Qy~|n;E_}T^p6^eA4)x*;/E' );
define( 'NONCE_KEY',        '_!,>Pb{b`6KLJRM.n2pjHP2m{mQZddQ@>Q`LzM^Lw)mC+I$CvQAt_qM;ME`cTcKT' );
define( 'AUTH_SALT',        'GtYs+88;Z-CH{%/#L:21F{N-1+}}%pX<*XI4Pv 6lmW>g`uQ1n%/2{[`:l$R(<un' );
define( 'SECURE_AUTH_SALT', 'KTNbnif:S(:/T(K!PJ19MVHNFx-/8.V99*:EUmZtOzuIij$]exOpJgrh2W+5 vop' );
define( 'LOGGED_IN_SALT',   ';hS_<^~4<#NZvoWR)_!QaOEAn{gv;_!W@>zE-GQ]SElI;Q:RH[l(4G,UW>.4ilMF' );
define( 'NONCE_SALT',       'SZz{Eq=Q:9C3yZo=-VsK}hvPe37;<]J;8Ull:fbw%s6l:e-kfsefQRMf~?@R@_GR' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
