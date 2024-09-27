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
define( 'DB_NAME', 'coolemballage' );

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
define( 'AUTH_KEY',         '1@N1im+t3`V::JDV oQGuOaiKVZ]_M[Wf4FIk~])KX|=JO7J<zA(Eq9+J%.kte4f' );
define( 'SECURE_AUTH_KEY',  'r1?,Yr!$9DfSeGoq.y+/-r`+uG2< 1,60[nC*||!yTmheN6kV+Ea]z`PpUd.G ?a' );
define( 'LOGGED_IN_KEY',    'U<cdHRPy<{>Wt)2G<Kd^mLiCv50r}N}tM!1gB(mk.$|DLT`}yT[XoX24ElIw*LiU' );
define( 'NONCE_KEY',        'P2D>a8|b3zu4NM|8}A:g7WG(D^^cl&5OchHW9Q-Yn>_cZT6%z6sr*HdXB_<0QJ%<' );
define( 'AUTH_SALT',        'nS)HN{(YLy01(Pj.i,D&6&KsSQQ8vw1LYX7pys}P`l(<RC_YQY/{|<N@a;X/c*Q_' );
define( 'SECURE_AUTH_SALT', 'lBqWR;^7.|-+&zlPpV`PXha`(sd<&XtB>VPP[o%1BS;vYHNIUsHl>0gU[FkLqTi@' );
define( 'LOGGED_IN_SALT',   'h@5b._KW?eA;$7+dPCL$haxTT,EC7&WfWR$IW7Cf%L<]<fWZC@}iZ|a]Rpth0C@j' );
define( 'NONCE_SALT',       'qBt((X)``GVsBAM>w<Dd}Ei,wnF|]:ow1Q;~5<JB3]HFaT]f58eN$<fglEk)|$^I' );

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
