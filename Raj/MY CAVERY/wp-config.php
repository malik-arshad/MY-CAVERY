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
define('DB_NAME', 'ICT-2');

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
define('AUTH_KEY',         'V{jWDw6TIslQ0Tjh;G;5oZT|DlHD|>)@u^c}juok@iV9s5v/1}aQ_]CyGr!Z;V/k');
define('SECURE_AUTH_KEY',  '<wFhliAyR&h*`?geX$!?=?WED9T/{,H<7bEY&1L:D#+yDC*Z~mownC?*]zKzh28`');
define('LOGGED_IN_KEY',    'Y3Dt(??Z[?2> o/HmW2r~-G&G3h lO$*`e5Yid422~NaS$wWjDCM_K+tU4RY81<c');
define('NONCE_KEY',        '%ZXW|N-!Spt6+k:(oxb!Y<Kf:bJl}^iI#5rgAREjL]a#O/nR@ ?:gnS+}YO75=&V');
define('AUTH_SALT',        '],~OX1v@T/!>e|@j;)!UziB>Y5{5z|&oa%T)BWq5`~}H/,y^RL<;(KM:KrQ)Yz9%');
define('SECURE_AUTH_SALT', 'J^Pk %:S{!PR},@p3X:c_z+y8*]%u]XoIWAPPx+)+T&~qc89CEv8>xnuH`699C)3');
define('LOGGED_IN_SALT',   '2;=Kw!So.qSxkbK_,fPk]G8!L6cBrEUo,P=cC`p=Uq$E=A6nq,Z%|PQ7Urt6wlwk');
define('NONCE_SALT',       'E0F6cJ^r;tN1JrY5wxz0X6FP]a),}fJJCv 4Wc|j*x#N=M.n^ZA6!%WF%_czGe)M');

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
