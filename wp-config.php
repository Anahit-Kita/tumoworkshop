<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Nj>[By|OZp@(;*Y^KVrkx!LY%A]^W?DF3V%Q@pjB{pe+aCZqXC!5{-;:E;*|- [5');
define('SECURE_AUTH_KEY',  'G5+W1;6saV,UWugn,a!F@+ywR+W[>Gz>2{!3aac{w_[FUpk$h(r?U*})O^3Oe-u)');
define('LOGGED_IN_KEY',    '%i~)pVJ%A`e!+f6s[3n#o=u*lj8(VH!nJ@RTZqnO`+6Cuanmn@l%V|Nch3lBDA%Y');
define('NONCE_KEY',        'Sbodn95qL1hPckQ$62w{-NLMtQnIam+`z@8EyR$we}0^~qMm+`2[F8G%1-lEKO( ');
define('AUTH_SALT',        ' }?XHJ.%,_hlEBy?wSP`1X+qTys,.}]#@K-dv&q8@t9*+m|c,>(s?0Y2=#f.^[{_');
define('SECURE_AUTH_SALT', 'y/p0P!IhMHscI+tW}lMO)M<3)>ZDqRj-<_jkdF;|lW!@.%SQPQ!~*~.=Z.G+52 b');
define('LOGGED_IN_SALT',   'Gi59)F&I_I)z;b:(O--1{Tt-2]lo;PG25^blJpHE&:s%&qS--CjWykj{-!P6Tz^ ');
define('NONCE_SALT',       'm-#WNA+XtBXsH{mFJi=Q^FE|)K*WV}a:Vq1)MVO}(U~vYY^|&Z47~?m*|H}l BXN');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
