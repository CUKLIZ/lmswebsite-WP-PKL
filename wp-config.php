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
define( 'DB_NAME', 'lms' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mika' );

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
define( 'AUTH_KEY',         ':py)vJHZ^2~N?$z<sV`vo<@cf)oEBYk^-7wj8wtunE8tHlt(Ar&UShQN|-ZC9Dj$' );
define( 'SECURE_AUTH_KEY',  'lvq&JH({(FZ9A$a5&YB$W*Av_&_9BT[NX$q8k[,oMzVzU{&(DP}?LML(e <})=M/' );
define( 'LOGGED_IN_KEY',    ')YrRF&m_k*2/8%M+ejGdlmS~1/1_$X8Yv<yt&:(u@nJ7Xi O)%b+-FP!LLwuf^jb' );
define( 'NONCE_KEY',        'F<$jN%>N$F.enJC%59_CdU3BVNId^@z*Oh,PL{K}Nfal+<ODmiT>k;CQEXM}-eX=' );
define( 'AUTH_SALT',        ']bbE(~8;({KTk6G$<tPl6<b=C$BX&_<US/QPzRPy(ThqN!~xa,?iQZ{?W<]y/FoK' );
define( 'SECURE_AUTH_SALT', 'd(P<EkFh6)X3eM%pnSb)=}qP-)bu3y=Ro23X53qhKgYgyJ4##chVLwX$2)hHL#kT' );
define( 'LOGGED_IN_SALT',   'I90!g~ya!d2}g:To}!RL.V#SYfK[<Wp`H?|[2]=;|jwMPbUVA?yimeVqEY!f`Z}B' );
define( 'NONCE_SALT',       'iI)LSxf-t|/]*%&_T8fwfB&dj:Rh~XI@^?n),Cm!g2x8c#P[&i9(RB$]Q{@ g.? ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
// define('WP_DEBUG', true);
// define('WP_DEBUG_LOG', true);
// define('WP_DEBUG_DISPLAY', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
