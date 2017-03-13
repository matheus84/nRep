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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wp_db_password');

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
define('AUTH_KEY',         'lDJ!XCtecokoll-u,0HgFjlMzb>s8Z^M6)d*~M!X/UjQ}I tEuU%|b1*A+6bilpU');
define('SECURE_AUTH_KEY',  ' q:e^&8/?FC@xy.(z&xhO5 h=U|~D+3|_]N%y=<, -B`gV}*n9e[77QRzfpzY2r0');
define('LOGGED_IN_KEY',    'c7nUrC`5yi~k>Mxu)*JcPyGrO6l[@Z<sLAzu|Fd$;l=r&/2_ER3YKhkwCFlRP?U<');
define('NONCE_KEY',        'M^#2jC:zhSo5L/Bb.hY.,ru6E$<J=;tn)^(?! ZqyRT{V>|Yh|,.I#4cun(_7:`a');
define('AUTH_SALT',        '_Jh}kkq2ZwQQF~#9A+HjaMi|D>I.r;`<s2Je{3/bPnVEv.LLs>cJj`$A`GIGQi:?');
define('SECURE_AUTH_SALT', '1_InskqUQDtQJq.ye+opr;|7`5JDl<fhg)o-ZA?c_I{58`%LC|XLxW9xwN_ZJZKw');
define('LOGGED_IN_SALT',   '#,u]1P]L7Q$I-rQU^d%w=Z79RX%21r -X`0HYct6;d=/VRNiDBnZ]Z-_vo;xw xj');
define('NONCE_SALT',       ')*]]r?E.IR=vz}N`j{QatJc0VYr-C!pn~dC?qzn]l .n,McP}?(hp<0nJl7U2z)a');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
