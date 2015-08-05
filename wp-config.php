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

/* DEBUG/DEV ONLY */
Define('FS_METHOD', 'direct');

define('DISABLE_CACHE', true);

// Set for mac
define('WP_SITEURL', 'http://localhost/tests/NP/npwp/');
define('WP_HOME', 'http://localhost/tests/NP/npwp/');

// Set VM IE
// define('WP_SITEURL', 'http://192.168.163.1/ohmztech-corporate/');
// define('WP_HOME', 'http://192.168.163.1/ohmztech-corporate/');


/* END DEBUG */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'npetes11_np15');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'localhost');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'fMX.bfyEIu<FIc${brvBUu,UXn7Mn^7BU^,Ukn3Nn$Mcg}FfvGWZ|9Zo8OS!1Rk14');
define('SECURE_AUTH_KEY',  '+Xm2Lx+]Mb${bquATu.Tim6Mm+Jj7n$^Qfr|RUk4JkzJNc}BcvBFUw-GZ|[8os8RV');
define('LOGGED_IN_KEY',    '|KR4!ZtKsKZ!1Op5Ht_a#1d~Ka_1P<6it9P#6etLx_Ab<2fuLy.Pq6Lu.nE${TjA');
define('NONCE_KEY',        'C~VZ|8lo4ORp_OS_15l-5O-~:dt:DEHX<]Xm2LP+]ap]9p#EIy<{Xq6Aq*.Pi;2ex');
define('AUTH_SALT',        '.e]9l*6Am*LPi2iy+Ib<{Xq>{BruAUX,7Xn7AT^.Pj^,3jn3MQ$Qj3Mn$MQfBR');
define('SECURE_AUTH_SALT', '7nEUY<7Xn7MQ^BR^04jn3NQ$0cf3My$4NR!0Rk04Jz>Jc>}Brv:Gsw|Vk|8ko!N');
define('LOGGED_IN_SALT',   '3u,Qf3Qk03Jz>Jc>}Br^BU^,348k@JNg!0gvzJYz>Yor[CosCRV!4Vk4KN@:Nd~:');
define('NONCE_SALT',       'uQq7Aq^.Qj3Ujn7Mn^MQf3jy$Ib${NRg04gz@Jc>}Yr7BU^,CVZ|8Zo8NR!0Rk0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
