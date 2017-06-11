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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'nc_rainbow');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'X7OJ8dt>:%},z-M^O{}L7.%v4l1M?`/:`YCW-fos9+Y(~f,@eh.*wwTh:]8eh/O|');
define('SECURE_AUTH_KEY',  'G$IWWLpcj85z#b7y]z.Xb)`#TQ8?J>-AYZ)SH^h R-kbH3AU6=9Vx.0C5G~G)V*N');
define('LOGGED_IN_KEY',    '/C3H[>_AQh>2DpE>7[R/yc:-|l0Ke/D{1~x(k@N#vtj-L,ZKVL&4YS2rPD,_G3E8');
define('NONCE_KEY',        '~37<{L|W=!OXy*AD7ytAH5.VIC4R5Ct0ez!u!pYX/R&P-[PXJ0DCw;(Z3UwnGd<l');
define('AUTH_SALT',        '@D(.CnQ+OnxpM%Lp1gAr<0AVZ:D& ted<FADI6@(#PzV%;hmx{&#V_rD@&+U#iy>');
define('SECURE_AUTH_SALT', 'ZYk/,b{!zj?mn-fviP/Yn`B`[3v|w/HvjQFGT/W`>/UO+2/0SO]`YOL^gHAC/3s-');
define('LOGGED_IN_SALT',   '9%hz<Uee:EPx)iNS7gTkcBWs]t@y)_fz%[GCSOuEF]G3#J1#KSKbrE`AK?>&+:iD');
define('NONCE_SALT',       'W>4(FQH2Od!|^OKvL8Rs@C<*>Xgv/PrC/D^dA+3V3/!Xl?G~Yl47!]U;LVE,A^U#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'nc_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
