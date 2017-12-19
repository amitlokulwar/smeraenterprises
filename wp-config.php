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
define('DB_NAME', 'smeraenterprises');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'ac3r');

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
define('AUTH_KEY',         ' ]P)jc|?C9_kX,$I|nJ*8b{i`_4^:$DQkjdmKO1j/YZ!_!HlnRsQbL3QC{oX<oBI');
define('SECURE_AUTH_KEY',  '87H4}Vy@yj$(kv/b&9qd=`+Sc{ChCDg(GH/Up*oHF<E:w2_]H*cF_B@vM?e-V;q#');
define('LOGGED_IN_KEY',    '~G(1qT}794XB0 y-Xa[Do2xSS_OV:HC`/2DsD[q~&WY+[b|Q>5.3gaN<l1}q&M^Z');
define('NONCE_KEY',        '!?9@{y{9N7{MS4)qUB-.UX(|4v<CCoz26M0rp7RW^$hRj7g&IHI4;0aMpa:<apZ2');
define('AUTH_SALT',        ':q9Y0F~]$f 1=msK9J /l!>mz$*fqnPZ2 H/Burl}q<))$z[LI){rcW5KxeP^aJF');
define('SECURE_AUTH_SALT', 'M7d82~t](Y1TUfT!B5AC7y|Vn> 03_1#4*1SQxL=bOP(dex98*>1vfTa9I^Ao(-V');
define('LOGGED_IN_SALT',   'ks?<;b;igDS>JAtBm DTKq=<`nwo>5 ~[&8MN%I2qFUs5e$9h`#rFDX>s!Q624D4');
define('NONCE_SALT',       ':+vVkuQ/tSZy94T*`SQ<s^H[[>0u>q<~cRvPjT^J}P<?b>kqt#/yIkN)D3?ykq0~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_smera_ent_';

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
