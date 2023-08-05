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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'quizpc' );

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
define( 'AUTH_KEY',         'DkMrsAVgg@kZCYNshs^yh~uGC%(%{v%fcKG~7N#Za[es1jLNSwY^Em=lyyi1fD:*' );
define( 'SECURE_AUTH_KEY',  '!0Cq7i:Jp-:,oFa]@i;X6^<ZGFOElte{^c1y.d#Aa;8ROQ<izVvp%HoXR$~<%U`m' );
define( 'LOGGED_IN_KEY',    'bPnO:v]E~(.AF@c~_wyNv`N?MKO6F/++OKC>C@)o!2cH[7E3LpWO=9FT@*m)m_M1' );
define( 'NONCE_KEY',        'I6$_I$b=NJ)P`dK91LMuwOl/^s<zljje1)]wK(t+b&Vukt_/6(TPG5Ru%RNHv@6q' );
define( 'AUTH_SALT',        'a3U!L_}<UXauO6~c]5]Y$Rj[W46S[[o=x{f#>I}#hYr }SR=+?[*pF=Ge?9WRcL=' );
define( 'SECURE_AUTH_SALT', 'n8Z0SJ^,^7Pt?Sk9U}985KyIIw;D|>x,$82.` ^$fQvK[0:;Z]_@}I]fzqHpd}JW' );
define( 'LOGGED_IN_SALT',   'oU1U<(b_ :wX-LX*!sH^;q)kQl~@H[#T3{n%~1 /|_M#h`H=9dG`DjY^uZ=fjw|g' );
define( 'NONCE_SALT',       'U314Tb]Ej26}#Gny*[{!}*tZ/o2p4w1pcX|k 8#Gt<</D=ws^W)!dw]{wgPU(.mu' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
