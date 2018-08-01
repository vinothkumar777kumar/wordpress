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
define('DB_NAME', 'new_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '4xwE{B@I+Z,ab~?9RrIq.pK/!m8]Q[Sc]LvvqfFv@9*k(0{Wv1XPI%gb}msB+zOA');
define('SECURE_AUTH_KEY',  'Kx?7[5)lXZ#@EjB~1FI<|<`,K?g:)Y:?/PMQwBH%sV`.3M-oBa9&B@Mm2 %=oa86');
define('LOGGED_IN_KEY',    'tcu6aDf&kc_C#%qU@axGSyd%89h^T^%7~=TOf/Tb:P:m1qJMA/tCWFmcmX#7sv9n');
define('NONCE_KEY',        '1oW^MY+- j1xVVLs1`$G~|`d:G/;6aL_Axo1Nhg|&gzuXJD8YMt>h/qzWQwZ*-:&');
define('AUTH_SALT',        'YMcyuRWa0H~P3(3b-g9]Kf}#irg++7wp,&u&!g,Q{14~?YJ_WSk$>:Y@i[dHs*gD');
define('SECURE_AUTH_SALT', 'dEIh+/[4[w&oQp T#N}0n5Ee6z_[WDRv-=zUJ~rqcMJfW`K(6E$==UH`Bf$TSxtX');
define('LOGGED_IN_SALT',   'TgX-y=@Z3JZ0?6c-|@iela3#IYa~5C}<MnM~@ A7RKiAw$ZD=WkleJ@Ws$@/ViOF');
define('NONCE_SALT',       '8?W p}^r+va?1H4ogJ!n(!#O:&_uGPukxzD^q{w6VmX74k^C=wVdMAV 3@|.f8>U');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'new_wp';

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
