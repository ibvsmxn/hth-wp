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
define('DB_NAME', 'hth');

/** MySQL database username */
define('DB_USER', 'dandre');

/** MySQL database password */
define('DB_PASSWORD', 'phild049.304');

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
define('AUTH_KEY',         '_0C|dq1.A:R)u8:OrPZ`SItNW,HT^n(D^=S.^/Oi8;w/VRK@&jH+~|R|^uSXtzSB');
define('SECURE_AUTH_KEY',  '68yPhTcOvkJSVNcqLU~mj{wMx<}lk(%#[+M`ev{(WFGx!CMM}61EfT(@wJ{,ao#u');
define('LOGGED_IN_KEY',    'jI#ojk(1.;%^w.4?5tD?ei_vI+[_@ov0{BOxbz+kLMk9:UJ-UUxJ/ni$sw>-}*Gr');
define('NONCE_KEY',        'F4H,*&+w s27}1*%P7h+,>BV.fs> qY}/;e1R578!n)Bk~eBEdMQ0mu{_0+8MWv[');
define('AUTH_SALT',        '-ieOFb}lEofY?!/-S8iDD7~r+nvY{T2p4waC(m(GjHkU*V@84#p#|rezndstG4 u');
define('SECURE_AUTH_SALT', 'k]:T+)2/7r9F2`kf:WMm0^VZ4ynb*4`r?>*e`w_LG&[Qz5.*z]fp2}ZeKnupdS3r');
define('LOGGED_IN_SALT',   '}TS=>}>f(}_}&Mq~k]a33F^XkAe7!feah).#$Q*I645K8AH/[.7$@A]I?ne0ELOq');
define('NONCE_SALT',       'eN?<xX5;T?rqXQ;X1BavykoE6~$pw-A[/s_k6f2B4ib-A*r=IX~!R3Xw69@j`Giy');

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
