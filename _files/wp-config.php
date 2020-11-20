<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
define( 'FORCE_SSL_ADMIN', true ); // Redirect All HTTP Page Requests to HTTPS - Security > Settings > Secure Socket Layers (SSL) > SSL for Dashboard
// END iThemes Security - Do not modify or remove this line

define('WP_CACHE', true); // WP-Optimize Cache

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hopeafco_db' );
/** MySQL database username */
define( 'DB_USER', 'hopeafco_dbusr' );
/** MySQL database password */
define( 'DB_PASSWORD', 'pInmyJ4bLgG5' );
/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!D8r{P`.>&p/Q*.[_2a<9Rgws$ZyS([&~:U{<9 Te!7.6UCG~~LqJ|e3G|4G^:ez' );
define( 'SECURE_AUTH_KEY',  'HPgvi2 g3 nSkzvE?SEJAR4@xU }bh%4t-O0Hm{H}<;:sQ35xu&:g[EOT|?s7?HQ' );
define( 'LOGGED_IN_KEY',    'XjZ6cWYn=*kCZ3[GZm|&^.d&dk%9{b#b1;y4xy2RZL}Q1fccqOFEDS@h^#IP2iFF' );
define( 'NONCE_KEY',        't,EGX9hq.hs)Gt6S*&OZi0W)51?Rp D_&o}.,jeB<^Dp~*a[Ixr6FzP0FIf-j!On' );
define( 'AUTH_SALT',        'xjTd>.!pk$:_]2zSL.ZJu@{{P@&PY _.74Y/aCCi,OV(ff:C)>@#z$I.YN]q2}mN' );
define( 'SECURE_AUTH_SALT', '3ZA14DOi_Q|1;(:_9xGjqCN3AvuXbkd-..ajbc*}Q1VEh~J.+;5KR<l?Plj);U%K' );
define( 'LOGGED_IN_SALT',   'V?qMc+4]&5A5AC3y3<mX=(o~Eo2rnLyo- jP=QbRoURPol){pNR khIJbJ(-XcY^' );
define( 'NONCE_SALT',       '7CGHrv)B98Kde3UGNoZgR;t19{uc-/SgYlt+4yEX9}C]{~*aQrXU?Sq*/)En`|(1' );
/**#@-*/
/**
 * WordPress Database Table prefix.
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
 
define( 'WP_MEMORY_LIMIT', '256M' );
define( 'WP_DEBUG', false );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';