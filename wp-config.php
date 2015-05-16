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
define('DB_NAME', 'siapalagi_dagang_db');

/** MySQL database username */
define('DB_USER', 'matakucoklat');

/** MySQL database password */
define('DB_PASSWORD', 'm4t4kuc0kl4t');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * disable auto draft
 */
define('WP_POST_REVISIONS', false);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '56,OC=[DRCo=Fw3wsGss]6~llC_Z>n2ggT-k86i+!o1c j+et|:Kq]D^+:gS=-Kw');
define('SECURE_AUTH_KEY',  'S3J+=63i^zg`h,2snTHE%1zbLSr.f<]P0S.{^mq5-SG`g|B{<?uXELG4}?X|tFu0');
define('LOGGED_IN_KEY',    'FTz%II`-y/xE7&OE<|O:i7kDyaqfs`b&W E(YD@8Uesi%e+Gpx&3MKhuKAp/}vk!');
define('NONCE_KEY',        'ef n+lNiN?r5hXa=-.YH1-3 BU96vMIWnXf-<vUb~L:G;`.2;{3c-u(GwS<Py(`F');
define('AUTH_SALT',        '#6:Mf@T?nnC^&K([edqW/s+D7w0UB!bseJaUG*57 0Ee-M[:&ng+Zd.cI78q</[{');
define('SECURE_AUTH_SALT', ')U%sdKZdAOkxZnJ0@,M5P(*N*xbezxA;#cSjJb,T}*%rTlodmb.XZ=G3b7r|J,u}');
define('LOGGED_IN_SALT',   'X#Oj,02v(Q77JPhIh~|!]n%B174bE5p0W0}l/5#`fRoK|~GO9UafwVo(=&YBDJ0)');
define('NONCE_SALT',       '^D7,2,P>>nJ]5nMd)q$h#TWAEUKaxLED;}0Dh$O8H$N@[-3XnsJ;nis,^/l+1B>;');

/**#@-*/

/**
 * Disable wp auto draft and auto revision
 */

define( 'AUTOSAVE_INTERVAL', 60*60*60*24*365 ); // autosave 1x per year
define( 'EMPTY_TRASH_DAYS',  0 ); // zero days
define( 'WP_POST_REVISIONS', false ); // no revisions

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sl_';

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
