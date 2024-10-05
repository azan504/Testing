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
define( 'DB_NAME', 'azan' );

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
define( 'AUTH_KEY',         '/)-EN4P)x{}THPVmfw=Z>?Q4I*S3x#%M]cja:fxLA0bGpWT]LDsia1)6qdNx5h{Q' );
define( 'SECURE_AUTH_KEY',  'GxtoN8!S:<mWt3R*Qg~=X><O;*F }6XoT91(bkE8#*lI5tlUSzPPeb++XpXO7I_j' );
define( 'LOGGED_IN_KEY',    'Pbt%%e0^rYi9ja;*Y!7Wgi/%m8v 8ZX<hAikhI7xQ7,BZK=z5%Rs]{m-jt/(?&`*' );
define( 'NONCE_KEY',        'M:6L-=HH8<_1,  uV!Ly@1c8RlF0?K@gW|Os<#/Wq]Vn-&kvUs#jlep[5Mkr|b6t' );
define( 'AUTH_SALT',        'ZFhh||PF^NnQ ^>rtJ)SeIb`tVI3}%KVz_p:Apyu*%;ybK]P9?7hpR/i[xfgN2D%' );
define( 'SECURE_AUTH_SALT', '=?hg), %o`43<mVn1cn~zq,P^`X}WN.?3n;:;gI<=<B^N@~Xm,+rG!g5(T:O|cHW' );
define( 'LOGGED_IN_SALT',   '>_%yBqlNPAdLi5qW!qds<ilq{Cq*DY??{?9g]}o#LxsFqZS[WcbONXZuw+&q=~4F' );
define( 'NONCE_SALT',       '@1et;f5Om2<:m-+g?;KTcGz*7lsIiD()NZxoWe3m.+7kv/enI7cS0Qw H@=dKU!)' );

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
