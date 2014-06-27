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
define('DB_NAME', 'bedrock');

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
define('AUTH_KEY',         '>p+W[rCj_fvjJ=QqR+W942bvNP`+aD^Yhf$9^g]I:C?[4E4[hNa[;OgvT0C2f$CY');
define('SECURE_AUTH_KEY',  'wOOavFY) BVm!K@qbC~qBPpg[jHNuMK_J o2<R`:$oLA@Pb6*As3w<<4s!:y85Wm');
define('LOGGED_IN_KEY',    'rer%gNs$x*#hyz<Xm|,68b=,zMlfiW-IjM+x|(U&sD=JFTa8[-p^X>)NBV&J0V~{');
define('NONCE_KEY',        '{:9Bz}(MQ>]Zkm`F4:d.5]=:bh)oG=i:gwZ.voph7L|gzH3n<m83Rr>f!%@%L+)_');
define('AUTH_SALT',        '[Jl|_tomMa-s.&#`[L$6o/?:w Gp+/hVTpQ#@M-UYjR`25n2OY~#^Ab3cikw>n<A');
define('SECURE_AUTH_SALT', '&6OM/c-c/!Pu!Kn|,N:7V2@f&3Oi-C;F~OtlZemf&+Lz4_ISMN|Eaw,|st@vdPET');
define('LOGGED_IN_SALT',   'x6Z<=XYHLb?@GJ>Jm|-ScR{s`C_W<t>DvZR&:j+:q$6E|)+.vUgGJN-5*3x??hEe');
define('NONCE_SALT',       ']0oyi#~cuQh(_]bFt/MHL%-D]p8x)%qs7%sP:&v.S-8P4T/+DcX}56K8MqU7%]3U');

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
