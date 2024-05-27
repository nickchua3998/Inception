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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'website' );

/** Database username */
define( 'DB_USER', 'mysql' );

/** Database password */
define( 'DB_PASSWORD', 'qwerty123' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'a$q@Q5j*}#O<aC<3-SQ#Xv,_pHPZ}38_:2{FCc_B6?(6Uq<8/_VZcuN>=Wzes_)6' );
define( 'SECURE_AUTH_KEY',   'C]`cJ5_JlE_]m>H5?QE:pQM9&DkY~xN#VG&5cwg(ds+5piyJ|gMl)N!(g}XopRC2' );
define( 'LOGGED_IN_KEY',     ';-Pto*QrspweJV7+W=K.|e264h}S;k$2@BRm8NE1GUyO}@tA=Pfe*hh>-BL]!vww' );
define( 'NONCE_KEY',         'b.F*gkSfabX*Z*;[7jFLW8v7$v9cF/lN M%{5TNI8W<wigc|M1/g1yYFB|d?bL$W' );
define( 'AUTH_SALT',         'Z/K7eZ1UXj2F* FuO5Tb2f)MxdElP,cjEaB[.*Iz`nzH{pe%t|<TIL3q*6NNrjqG' );
define( 'SECURE_AUTH_SALT',  '6$oI_E5>Am*5BclaF-G*B#}hY0Y=q]XnR;j2U2_0C<iW)0d/_k<^AYEv:IS229_#' );
define( 'LOGGED_IN_SALT',    'mIAPhNa1}ZCI.Eh2aOyyB#zu+fNJ P4L vXK=P_-}^ n?u{ebx02.6l|3l@{V0f?' );
define( 'NONCE_SALT',        '_HK.~6nC[ui1/9#`|s*dw}Cb4%AkYB[b?llJAv>3WM]xqlN<yDfuOaEnw?P2(2e,' );
define( 'WP_CACHE_KEY_SALT', 'T(^Q.s~p1i0,a7af&8`G0v@YY]GKhFzVry//OC=)C5rQP*g0%mmdwp63/l-OwjPy' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FORCE_SSL_ADMIN', 'false' );
define( 'WP_CACHE', 'true' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
