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
define('DB_NAME', 'tgt_dam_opentext');

/** MySQL database username */
define('DB_USER', 'z013jlk');

/** MySQL database password */
define('DB_PASSWORD', 'qazwsx!2013!!!');

/** MySQL hostname */
define('DB_HOST', '10.65.162.5');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'en_US.UTF-8');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'N:reb/_e!W EU,YT=iaU<(P4~U@`m-oeq^[#v2_(obD/bePB__?eX[a(Xy;O#|0}');
define('SECURE_AUTH_KEY',  'F/W.OH-Oym_<%vmDMnrWWLMR4U{zxVp+r9*4uFd:[*B^1#|+PMw`_zNmn[*at*Z-');
define('LOGGED_IN_KEY',    'FYO$SF{9+/;0;X[EHs!GOi>9i/gELOnI5}[}waQREq#ODC[@^)y*t-x#sl*~mr,e');
define('NONCE_KEY',        '!i68L6|-_zkFspuoiJY^uMz-%xcb.xX$}VE$=b<r:HD.Z;Ydkvf`5]XT<.6J}Vt!');
define('AUTH_SALT',        'za@QGvfF-v&_n%k32o)g>JTvVO}O?lR6f;|N#,RWqI:t%3L0o.#%&Z+?*IcVxiUQ');
define('SECURE_AUTH_SALT', 'sI2(P+OisgiT/xm+ui?l{F{u/fx=WQlg;W3_C;JF#Qv5;B=TAHt3kK7U+0lI5o>*');
define('LOGGED_IN_SALT',   'D]?H/B1yxK8k7/8,Ja1NKS~R-Ei!0u,}]JVv}tM^m3L3[pGqJT`FE07U6V+@UYed');
define('NONCE_SALT',       'YV^wGSnWT`.HR|31,OH$=,&:w0ne~)w)mTN$6wv]!8^P_eAK w}8o**^M4PFcWQ8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tg_';

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
