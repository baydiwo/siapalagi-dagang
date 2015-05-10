<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
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
define('AUTH_KEY',         's/)<tw,!)3u`I>,RN -^t{TTS,;ey@8/.a}JUBT4+Y4At+jX<(%Kf Usu$Yn#X{q');
define('SECURE_AUTH_KEY',  '+-3zR$SSj&wdrWANZ0uLXT=~;^JaVY_{>lMaUQ|JlS-6*|zCa>f(sE2q/D994P{x');
define('LOGGED_IN_KEY',    'iS|V1x4n(/(JanH+o89HSys1}.wn8S%DOoeckvnn1][r)XX,lT/TT[VPC/IG))+|');
define('NONCE_KEY',        '+U(t3|ehpV3|Rm6-~$P,88WAOJJf|4t_lnjs6L&7Ry9RHF8gCSt:g6&vkBCJYh~]');
define('AUTH_SALT',        '-CrWf97n16^F8+&sj|u}{Z!E9#crd0_.|H!+?=s-^Gw0u6~8zG C-I*=uSvC#aqG');
define('SECURE_AUTH_SALT', ';7[g3n#.0?A?U/j-,Ww#rhgA}knvVv(([g3)/{Mbm~x3=yJ{4ON.nYU50A#Iry0w');
define('LOGGED_IN_SALT',   'L/tjcfLulYq&U5W:w`}i--P;_dE<!cF|/UFGxbRe-`>%F}*k24Fk>&GNbexLE7ZS');
define('NONCE_SALT',       'wwC#mqW6A EJ_SPadOj<}( h+~Jv|!XEHN^3hvgK^sbuFqc4Ld)m;Me~2,Ru_y-_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sddb_';

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
