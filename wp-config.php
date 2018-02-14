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
define('DB_NAME', 'sarahskillcrushblog');

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
define('AUTH_KEY',         'ms+qJW2GGrpTYWc,;JP*(S;.(6,tglFOSO|=+gK:ru4j(br=pSnZz([CET=Ly|s/');
define('SECURE_AUTH_KEY',  '[L4S+a!$bBeN_]M~v=<;R txrR@`|Y.+J=1P/$U@4J Fte{+zH-44W0?PcYG{UX ');
define('LOGGED_IN_KEY',    'G}raHb}5u6-.?yhn=W+g*=>v84Ph$@,o9C-KEI0*1HAdlDn/JPA0r-]qzw8vy5sS');
define('NONCE_KEY',        'BYqS_tcV+pCrgJs?P!4}LcBniC}T6o~`k5~lZAiRRk=}kD<-YB$JO%Wf>]P=FO8k');
define('AUTH_SALT',        'h^i*=2.XNCn` @npi}u:WL+9XFFBVP[H4t%4BH9(Ei,@W}fL_DG=w/0}NDLRFX|m');
define('SECURE_AUTH_SALT', 'm+F!yG[{J1_=j%Qo2E5Ys~_3m60nH5o`CjmB)i7gvaphfVZWpAf+-_?<ab}lIA2;');
define('LOGGED_IN_SALT',   '_LjB<+_YVz;xSe|D)}?Zy7f:Oe{H2y|(?LdKL@E{?5Zm<]]h@D,D;Le:*+TQ(mxq');
define('NONCE_SALT',       ']!j4|<*+mC3R4C$h$;MJSs5+CL9d4W+?@.F+zX$~U5}2%(C?;zM}k!c;GV]a9=A3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_swukezu5_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
