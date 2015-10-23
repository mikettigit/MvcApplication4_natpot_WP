<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
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
define('DB_NAME', 'miketti3_natpot');

/** Имя пользователя MySQL */
define('DB_USER', 'miket_natpot');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '12082015');

/** Имя сервера MySQL */
define('DB_HOST', 'mssql2:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Uylm8sX4YTOkhB1KKjRXKtVk#PyEEP9uWAG&J8hu$j4qdMf02sQd(!$%K0DLc3GJ');
define('SECURE_AUTH_KEY',  'M5V!FG0C*U%H2KjAXpCg8SzcjN$nlXWOJXZj9Fz%%xi4s*cMowBMDyyYMQmfktFA');
define('LOGGED_IN_KEY',    'yj6Im9jPz3kn91WkF4hBmehQ141Og6x2guT5K2DsMh20&qaexCGJ4y86GE56m&0M');
define('NONCE_KEY',        '5(UWyVM!h(lVxrF%N#EG!u&mW#k(nSxvaokW%vLP)#d!6mZxLfT#)3pPhQ&MH!Vn');
define('AUTH_SALT',        'fg&Ef%ESbz^M7)1wEEgw9XfZd7hl5Qd^NY3&vy4C57R8^TyhOFHZ3w3^Vdj8$23x');
define('SECURE_AUTH_SALT', 'Jm26eHI7T2Z^vEV06U8)M5p#j1h@1Ldo&puJXCHLAzJ0uhmAH0UY#sgT$d2htWUd');
define('LOGGED_IN_SALT',   '%UOPW6R0nkz1l*4(kj%VFJ7qXNt9q5EAsb(bBpbWae#Ov!5UMUKDRcVwGeDO)SKU');
define('NONCE_SALT',       'iU#pes^)%nuGtXgg(Cr(8mOto2)OqVCQhGSGHC9oNJxGrpn(IBY7ZH!FM9$VvSO8');
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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', 'ru_RU');

define ('FS_METHOD', 'direct');

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

//--- disable auto upgrade
define( 'AUTOMATIC_UPDATER_DISABLED', true );



?>
