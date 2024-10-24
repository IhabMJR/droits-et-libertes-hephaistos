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
define( 'DB_NAME', 'michael-un-dupre-projet-session' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '2XJa+*F0P`MUj:@t2_v3sCzGduerNH#?jMg=}eE-CL2HEz)*Wm>2lV96U(&lRcU(' );
define( 'SECURE_AUTH_KEY',  'aQej-Fbb79WOyXB]H<&;$ba]|G,*?/0p6b%^%;6~4)6n:5@,=uvMVK2O&Ef%9$kS' );
define( 'LOGGED_IN_KEY',    'S;+^HU,`r]#Yia&!.I9Kk:_h]|m6H9o$buPvB%padI=1&.t@TUOTU#j-_<Ju~2So' );
define( 'NONCE_KEY',        'l#y_ceF>z1b=&*3YVQAA06v4(~G9E(0T[3i/Ad3JZE8$^M=EabV.Tb/3HLI]C:4@' );
define( 'AUTH_SALT',        '`,`WZeWF2Uiq34-aA<BD$6Cw8s?mS+7tL+r4Fsj:ulP%0! bxn|3my8yTFH[4 $,' );
define( 'SECURE_AUTH_SALT', 'Y.e5NE]935l(4B@/)Q$6ACTc~9]9H=6`JzKx,Lt<t<8JuH02u@-3o+o}U2+eUL7,' );
define( 'LOGGED_IN_SALT',   'N<cLlxmf(.I}`ZAT^mr|[=R/.(YDXfl]Lu*@mhlY}q4^6v}+Moj)!Zw?px9O5PZD' );
define( 'NONCE_SALT',       'ekQ|Sv-No^>x%&3^:DHF3*,4kjfipNtnc{,-Y+{30kmb)>{CE{*ZXJR{$0=#G2iK' );

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
