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
define('DB_NAME', 'wordpressWood');

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
define('AUTH_KEY',         'j++Y_467S@(a&3@5Q)-0?MG&D]ow|8Dqpztuu#_[~h2Qt5%Wn7rn$U=BrXFY);9g');
define('SECURE_AUTH_KEY',  'Zr1y<+>t8/#TL= Lt8LIKPsxM |xXyczw,xJHz!1|O1Csm9%(&s4(>>STd-V+Nwp');
define('LOGGED_IN_KEY',    'b@:1mmVnIwWaK0>ua-!h*+uwE~Rn|3-%y{$|4 &Bp>P?bktPy#a&T-?3v2Zz#Mui');
define('NONCE_KEY',        '=Gby:S-,{YwJjoVh}GoLGA%6&ou#NDHWFTE2~n1@c^tz3T-SW6nsDUYvDFGDb=8J');
define('AUTH_SALT',        '#]&ZnX$I4&}|P<^VQ{;^3`L`i0dmL,~_-GfKHG^J[ {6ei4;++oh@eS1uEDnTvF,');
define('SECURE_AUTH_SALT', '@8*{E(#,aTc+kQ*b59Un`P{gh+/}xz]-x6^|2bV+hh h$!YUpa2P~7:aB.`fioh@');
define('LOGGED_IN_SALT',   '&$(C0oWy4+nu)G(=o_>J@k+t>tzkS8$$9y7X-(|7MbPZ+3^-a}y6zVIdpaVW2Oa1');
define('NONCE_SALT',       '!E=67%)]yxv,B|.hdHC/b^8c[O-k8L8z}jiGr4Sgr(R<M]>$Wz85h a-r|QLaj9L');

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
