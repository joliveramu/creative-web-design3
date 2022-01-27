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
define( 'DB_NAME', 'db_project' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         't1`JK:D&<xEnmt-Bn&h~:CCI<#ppwFkIL8R{!#nF(;h-GadT(9DB8q7tO?pY;)bR' );
define( 'SECURE_AUTH_KEY',  '[,y!|{s<; uvHRh04(o{S!L}O+,(84w:`~8H%mg]KJv/Z4p^>lT3~/Td!DM8c_?D' );
define( 'LOGGED_IN_KEY',    'sPs|JRiA>I0hi_e;s8_<A`W,|f1eTQRk94B`[fN8AOAcy!z^8:,!T&7kv7s&?l>7' );
define( 'NONCE_KEY',        'sTuB=db}!Vctw*&Pxl)S7?Rw<t1Vm5-$T1s-uA$4:E-i{A@`l{2B1dp.xlH. Twf' );
define( 'AUTH_SALT',        '7d=OF/bbl$a=Q5D}ndX*W&`DcN|oF*H-Uk/.MR[Gz_=zH]!Y {4.]H-+YH0:=`ZW' );
define( 'SECURE_AUTH_SALT', 'H7L?*oY9Yb-{bsJGTHQ83Kt;dL.EZ/0t:_o>:u|^84.N-XL(^jcHl`#KU1GjE:f]' );
define( 'LOGGED_IN_SALT',   'n-DbKS yeZ/`JTy,i3,,<1GW>22KL~/p%:-)NAN(e4CB42-=8LTFd8>,[:QkA;H{' );
define( 'NONCE_SALT',       '5~UBsf9YP%6*=-Llkl5]hMjdI&+JFl%_!)s~)(te|Z2ldaJ_kq8hU/G;[@,Y/&mx' );

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
